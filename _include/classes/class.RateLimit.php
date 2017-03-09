<?php

/*
--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `name` varchar(32) DEFAULT NULL,
  `freq` int(11) DEFAULT NULL,
  `unit` varchar(5) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Table structure for table `hits`
--

CREATE TABLE `hits` (
  `event` varchar(32) DEFAULT NULL,
  `peer` varchar(64) DEFAULT NULL,
  `time` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

*/

require_once "MDB2.php";

class RateLimit {
	var $db;
	var $name;
	var $freq;
	var $unit;
	var $seconds;
	
	function quote($val) { return $this->db->quote($val, 'text'); }

	function RateLimit($name, $freq, $unit){
		$this->seconds = array("sec" => 1, "min" => 60, "hour" => 60*60, "day" => 60*60*24, "month" => 60*60*24*30, "month" => 60*60*24*30*12);
		$db_type='mysql';
		$dsn = "mysql://ratelimiter:r4t3l1m1t3rrrr!@localhost/ratelimit";
		$mdb2 =& MDB2::connect($dsn);
		
		if (PEAR::isError($mdb2)) {
			die($mdb2->getMessage());
		}
		$this->db = $mdb2;
		$result = $this->db->query("SELECT * FROM events WHERE name='".$name."'");

		if (PEAR::isError($result)) {
			error_log("Query; ".$result->getMessage().' - '.$result->getUserinfo());
		}

		$row = $result->fetchRow();

		if ($row === null){ 
			$ok = $this->db->query("INSERT INTO events VALUES (".$this->quote($name).",".$this->quote($freq).",".$this->quote($unit).")");
			$this->name = $name;
			$this->freq = $freq;
			$this->unit = $unit;

		} else if ($row[1]!=$freq || $row[2]!=$unit){
			error_log("Event updated");
			$this->db->query("UPDATE events SET freq=".$this->quote($freq).",unit=".$this->quote($unit)." WHERE name=".$this->quote($name)."");
			$this->name = $name;
			$this->freq = $freq;
			$this->unit = $unit;

		} else {
			$this->name = $row[0];
			$this->freq = $row[1];
			$this->unit = $row[2];

		}

		if (rand(0,100) < 1) { // cleanup with low probability
			$this->cleanup();
		}
	}

	function hit($peer, $name=null, $freq=null, $unit=null){
		if (count(func_get_args()) == 4) {
			$r = new RateLimit($name, $freq, $unit);
			return $r->hit($peer);
		} else {
			if ($this->exceeded($peer))
				return true;

			$now = time();
			$this->db->query("INSERT INTO hits VALUES (".$this->quote($this->name).", ".$this->quote($peer).", ".$this->quote($now).")");

			return $this->exceeded($peer);
		}
	}

	function exceeded($peer, $name=null, $freq=null, $unit=null){

		if (sizeof(func_get_args()) == 4) {
			$r = new RateLimit($name, $freq, $unit);
			return $r->exceeded($peer);
		} else {
			$unit_seconds = $this->seconds[$this->unit];
			$now = time();
			$result = $this->db->query("SELECT COUNT(1) FROM hits WHERE event=".$this->quote($this->name)." AND peer=".$this->quote($peer)." AND (time >= ".@floor($now - $unit_seconds)." AND time <= ".@floor($now).")");
			$row = $result->fetchRow();
			return (@floor($row[0]) > floor($this->freq));
		}

	}

	function cleanup() {
		$unit_seconds = $this->seconds[$this->unit];
		$now = time();
		$cleanh = $this->db->exec("DELETE FROM hits WHERE (event = " . $this->quote($this->name) .") AND (time <= " . @floor($now - $unit_seconds) . ")");
		if (PEAR::isError($cleanh)) {
			error_log("Error on executing DELETE: " . $cleanh->getMessage());
			exit;
		}
	}

};

