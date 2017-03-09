<?
/*
	author	: jkk
	desc	: the ubersmith class takes in two params.
        changes:
		 2011/01/25 garana:
			escaped strings in query string, to harden this class.
			code indenting
			do not use global variables, to avoid possible information leaks.

		2011/01: added a method for each of the calls we actually need.

*/

$UBERSMITH_INVOICE_FIELDS = array(
	'invoiceid', 'date', 'duedate', 'amount', 'client_id',
       	'paid', 'datepaid', 'overdue', 'comment', 'unpaidamnt'
);

define('UBERSMITH_PLANLISTING_CACHE', '/tmp/planlisting.serialized');

class Ubersmith {

	// {{{ Properties
	var $baseURL 		= "";
	var $limit		= "";
	var $user		= "";
	var $pass		= "";
	var $reset_method	= "";
	var $reset_value	= "";
	var $planv = null;
	var $planv_by_code = null;
	var $brand_id = null;
	var $_did_register_regen_callback = false;

	// }}}

	public function __construct($vars = array()) { // {{{
		if(array_key_exists("baseURL", $vars)) 		$this->baseURL		= $vars["baseURL"];
		if(array_key_exists("brand_id", $vars))    		$this->brand_id		= $vars["brand_id"];
		if(array_key_exists("limit", $vars)) 		$this->limit 		= $vars["limit"]; // make sure it's an integer
		if(array_key_exists("user", $vars))     	$this->user     	= $vars["user"];
		if(array_key_exists("pass", $vars))    		$this->pass		= $vars["pass"];
		if(array_key_exists("reset_method", $vars))	$this->reset_method 	= $vars["reset_method"];
		if(array_key_exists("reset_value", $vars)) 	$this->reset_value	= $vars["reset_value"];

		if (empty($this->limit)) {
				$this->limit = 0;
		} else if (!is_int($this->limit)) {
			error_log("Ubersmith(limit => " . $this->limit . "): not an integer");
			$this->limit = 10;
		} else if ($this->limit < 0) {
			error_log("Ubersmith(limit => " . $this->limit . "): is negative");
			$this->limit = 10;
		}

		if ($this->brand_id === null) {
			$msg = "Ubersmith(bran_id == null): missing required argument brand_id";
			error_log($msg);
			throw new Exception($msg);
		}
	} // }}}

	//////////////////////////////////////////////////////////////////////////////
	// Added Methods
	//

	public function getServiceInfo($plan_id) { // {{{
		$args['plan_id'] = @floor($plan_id);
		$args['bran_id'] = $this->brand_id;
		return $this->_callMethodFilterArgs('plan_info', $args, array('active', 'brand_id', 'category', 'plan_id', 'order'));
	} // }}}

	public function ServicePlans($regenCache = false) { // {{{
			global $UBERSMITH_SERVICEPLAN_FIELDS;


	  /* if (!$regenCache && !$this->_did_register_regen_callback) { */
	  /*   register_shutdown_function(array($this, __METHOD__), true); */
	  /*   $this->_did_register_regen_callback = true; */
	  /* } */


	                if ($regenCache || ($this->planv === null)) {
				// get cached plans.
				$mTime = @filemtime(UBERSMITH_PLANLISTING_CACHE);
				$limitTime = time() - (60*60*24);
				if ($regenCache || ($mTime==null || $mTime<$limitTime)) {				  
				        $args['brand_id'] = $this->brand_id;
					$args['active'] = 1;
					$planv = $this->_callMethod('plan_info', $args);
					$this->planv = array();
					foreach ($planv->plan_info as $id => $plan) {
						$_plan = new stdClass;
						foreach ($UBERSMITH_SERVICEPLAN_FIELDS as $field) {
							$_plan->$field = (string)$plan->$field;
						}

						$_plan->groups = array();
						foreach ($plan->option_groups->option_group as $group) {
							$_group = (object)array(
								'id' => ''.$group->spg_id,
								'name' => ''.$group->spg_name,
								'status' => ''.$group->spg_status,
								'desc' => ''.$group->spg_desc,
								'options' => array()
							);
							foreach ($group->options->option as $option) {
								$_group->options[''.$option->spo_id] = (object)array(
									'id' => ''.$option->spo_id,
									'description' => ''.$option->spo_description,
									'desc' => ''.$option->spo_desc,
									'price' => ''.$option->spo_price
								);
							}
							$_plan->option_groups[''.$_group->name] = $_group;
						}
						//error_log("plan: " . $_plan->title . " options=" . print_r($_plan->groups,1));
						$this->planv[] = $_plan;
					}    
					// save data.
					file_put_contents(UBERSMITH_PLANLISTING_CACHE, serialize($this->planv));
				} else {
				        $this->planv = unserialize(file_get_contents(UBERSMITH_PLANLISTING_CACHE));
				}
			}
			return $this->planv;
	} // }}}
/*
	public function grepActivePlans($planv) { // {{{
			return array_filter($planv, create_function($plan, 'return ($plan->active > 0) ? 1 : 0;'));
	} // }}}

	public function grepLicensePlans($planv) { // {{{
			return array_filter($planv, create_function($plan, 'return ($plan->category == " Licenses" ) ? 1 : 0;'));
	} // }}}
*/
	public function getPlanByCode($code) { // {{{
			if ($this->planv_by_code === null) {
				$this->ServicePlans();
				$this->planv_by_code = array();
				foreach ($this->planv as $idx => $plan) {
					$this->planv_by_code[$plan->code] = $plan;
				}
			}
			$dev = @$this->planv_by_code[$code];
			if (!$dev) {
				error_log("UberSmith::getPlanByCode(code=$code): not found");
			}
			return $dev;
	} // }}}

	//////////////////////////////////////////////////////////////////////////////
	// API Methods
	//

       public function clientAdd() { // {{{
                $args = func_get_args();
                $keys = array('first', 'last', 'address', 'city', 'state', 'zip', 'country', 'phone', 'email', 'brand_id',
			'late_fee_scheme_id');
		if (is_array($args[0]))
			$args = $args[0];
                $args['brand_id'] = $this->brand_id;
                return $this->_callMethodFilterArgs('addclient', $args, $keys);
        } // }}}

       public function clientEdit() { // {{{
                $args = func_get_args();
                $keys = array('user_login', 'first', 'last', 'address', 'city', 'state', 'zip', 'country', 'phone', 'email', 'brand_id',
			'late_fee_scheme_id');
				if (is_array($args[0]))
					$args = $args[0];
                $args['class_id'] = $this->brand_id;
                return $this->_callMethodFilterArgs('edit_client', $args, $keys);
        } // }}}

       public function ccardAdd() { // {{{
	       $args = func_get_args();
	       $keys = array('user_login', 'billing_info_id', 'cc_num', 'cc_expire', 'cc_vv2', 'fname', 'lname',
			       'company', 'address', 'city', 'state', 'zip', 'country', 'phone', 'email');
	       return $this->_callMethodFilterArgs('addcredit', $args, $keys);
       } // }}}

	public function addAccountCredit() { // {{{
		$args = func_get_args();
		$keys = array('user_login', 'value', 'reason', 'comment', 'payment_type', 'payment_number');
	       return $this->_callMethodFilterArgs('add_acct_credit', $args, $keys);
	} // }}}

	public function listInvoices($args) { // {{{
		global $UBERSMITH_INVOICE_FIELDS;
		$args['csv'] = 1;
		$keys = array('user_login', 'paid', 'csv');
		$reply = $this->_callMethodFilterArgs('list_invoices', $args, $keys);
		$ret = array();
		foreach ($reply as $invoice) {
			$iinv = new stdClass;
			for ($i = 0; $i < sizeof($UBERSMITH_INVOICE_FIELDS); ++$i) {
				$field = $UBERSMITH_INVOICE_FIELDS[$i];
				$iinv->$field = $invoice[$i];
			}
			$ret[] = $iinv;
		}
		return $ret;
	} // }}}

	public function getInvoice($id) { // {{{
		return $this->_callMethod('get_inv_xml', array('invid' => $id));
	} // }}}

        public function orderCreate() { // {{{
                $args = func_get_args();
		if (!array_key_exists('hash', $args)) {
			// TODO build a decent hash.
		}

                $keys = array('order_queue_id', 'client_id', 'hash', 'total', 'info');
                return $this->_callMethodFilterArgs('order_create', $args, $keys);
        } // }}}

        public function orderSubmit() { // {{{
                $args = func_get_args();
                return $this->_callMethodFilterArgs('order_submit', $args, array('order_id', 'hash'));
        } // }}}

        public function orderCancel($order_id) { // {{{
                $args = array(
			'order_id' => @floor($order_id),
			'step_name' => 'cancelled'
		);
                return $this->_callMethodFilterArgs('order_update', $args, array('order_id', 'step_name'));
        } // }}}

        public function editPack($args) { // {{{
                return $this->_callMethod('edit_pack', $args);
	} // }}}

        public function cancelPack($packid) { // {{{
                $args = array(
			'packid' => @floor($packid),
			'status' => 4
		);
                return $this->_callMethodFilterArgs('edit_pack', $args, array('packid', 'status'));
//                $args = array(
//			'user_login' => $user_login,
//			'packid' => @floor($packid)
//		);
//                return $this->_callMethodFilterArgs('cancelpack', $args, array('user_login', 'packid'));
        } // }}}

       public function getService($service_id) { // {{{
	       return $this->_callMethod('get_service', array('service_id' => @floor($service_id), 'metadata' => 1, 'modules' => 1));
       } // }}}

	public function checkAdmin() { // {{{
		return $this->_callMethod('checkadmin');
	} // }}}

	public function orderProcess() { // {{{
                $args = func_get_args();
                return $this->_callMethodFilterArgs('order_process', $args, array('order_id', 'order_action_id'));
	} // }}}

	public function clientLookup() { // {{{
		$args = func_get_args();
                return $this->_callMethodFilterArgs('client_lookup', $args, array('phone'));
	} // }}}

	public function checkLogin($login, $pass) { // {{{  // TODO harden this by remote IP address and/or HTTP Authentication.
		return $this->_callMethod('checklogin', array('login' => $login, 'pass' => $pass));
	} // }}}

	public function userNameExists($login) { // {{{  // TODO harden this by remote IP address and/or HTTP Authentication.
		return $this->_callMethod('username_exists', array('login' => $login, 'pass' => $pass));
	} // }}}

	public function forgotPassword($email) { // {{{
		//return $this->_callMethod('forgot_pass', array($this->reset_method => $this->reset_value));
		return $this->_callMethod('forgot_pass', array('email' => $email));
	} // }}}

	public function getClientMeta($login) { // {{{
		$meta = $this->_callMethod('clientmetadata_list', array('user_login' => $login));
		$ret = $this->_array_to_objv($meta);
		return $ret[0];
	} // }}}

	public function getClientInfo($args) { // {{{
		//$extra['email'] = $email;
		$args['csv'] = 1;
		//return $this->_callMethod('forgot_pass', array($this->reset_method => $this->reset_value));
		$info = $this->_callMethod('get_client_info', $args);
		if (!is_array($info) || sizeof($info) != 1) {
			error_log("Unexpected reply for 'get_client_info': " . print_r($info,1));
			return false;
		}
		$data = $info[0];
		$dev = new stdClass;
		$fields = array('clientid', 'first', 'last', 'company', 'address', 'city', 'state', 'zip',
			'phone', 'fax', 'email', 'country', 'balance', 'datesend', 'datepay', 'login',
			'password', 'active', 'comments', 'classid');

		for ($i = 0; $i < sizeof($data); ++$i)
			$dev->$fields[$i] = $data[$i];

		unset($dev->login);
		unset($dev->password);

		return $dev;
	} // }}}

	public function getCreditCardInfo($clientid, $password) { // {{{
		/*
		   We require explicitly a valid password,
		   to avoid possible unexpected call paths
		   for this function.
		 */
		if (!$this->checkLogin($clientid, $password))
			return false;
		$info = $this->_callMethod('get_cc_info', array('user_login' => $clientid));
		if (!is_array($info) || sizeof($info) != 1) {
			error_log("Unexpected reply for 'get_client_info': " . print_r($info,1));
			return false;
		}
		$data = $info[0];
		$dev = new stdClass;
		$fields = array('ccid', 'clientid', 'first', 'last', 'company', 'address', 'city', 'state', 'zip',
			'country', 'phone', 'email', 'expiration', 'last4', 'brand', 'unknown1', 'unknown2',
			'unknown3', 'unknown4', 'unknown5');
		for ($i = 0; $i < sizeof($data); ++$i)
			$dev->$fields[$i] = $data[$i];
		return $dev;
	} // }}}

	public function apiExport($table, $extra = array()) { // {{{
		$extra['table'] = $table;
		return $this->_callMethod('apiexport', $extra);
	} // }}}

	public function getOrderInfo($orderid) { // {{{
		return $this->_callMethod('order_info', array('order_id' => floor($orderid)));
	} // }}}

	//////////////////////////////////////////////////////////////////////////////
	// Private Methods
	//
	private function _processReply($reply) { // {{{

		if (preg_match('/^(failed),(.*)$/', $reply, $matches)) {
			return @(object)(array(status  => $matches[1], message => $matches[2], reply => $reply));
		}

		if (preg_match('/^no access/', $reply)) {
			error_log("Error processing reply: no access");
			return null;
		}

		if (preg_match("/^</", $reply)) {
			$data = simplexml_load_string($reply);

		} else {
			$data = array();
			if (preg_match("/^(##|@@)/", $reply)) {
				//testing to see if the data we got back is separated by ## and @@
				$lines = explode("\n", trim($reply));
				$info = array();
				foreach ($lines as $line) {
					$info[] = preg_split("/(##|@@)/", $reply);
				}

			} else {
				//testing to see if the data we got back is a CSV with spaces...
				//spaces refere to another row so we need to split on that as well
				$lines = explode("\n", trim($reply));
				$info = array();
				foreach ($lines as $line) {
					$iinfo = preg_split('/","/', trim($line));
					$iinfo[0] = preg_replace('/^"/', '', $iinfo[0]);
					$iinfo[sizeof($iinfo)-1] = preg_replace('/"\s*$/', '', $iinfo[sizeof($iinfo)-1]);
					if (sizeof($info) && (sizeof($iinfo) != sizeof($info[0])))
						continue;
					$info[] = $iinfo;
				}
			}

			if ($this->limit) {
				//if we are explicitly telling the class there are a number of elements
				//that needed to be retrieved via the ubersmith api...
				$data = array_chunk($info, $this->limit);

			} else {
				$data = &$info;
			}
		}

		return $data;
	} // }}}

        private function _callMethodFilterArgs($name, $args, $keys) { // {{{

		if (!is_array($args)) {
			error_log("_callMethodfilterArgs($name, $args, $keys): args is not an array");
			return null;
		}

                if (is_array(@$args[0]))
                        $args = $args[0];

                foreach ($keys as $k) {
                        if (array_key_exists($k, $args))
                                $_arg[$k] = $args[$k];
                }

                return $this->_callMethod($name, $_arg);
        } // }}}

	public function _callMethod($name, $extra_args = array()) { // {{{
		$url = $this->_buildURL('/' . $name . '.php', $extra_args);
		$replyMsg = $this->_fetchCurlData($url);
		if ($replyMsg === false) {
			error_log("Error calling method $name: $replyMsg");
			return null;
		}
		$reply = $this->_processReply($replyMsg);
		if ($reply === false) {
			error_log("Error calling method $name: $replyMsg");
		}
		return $reply;
	} // }}}

	private function _buildURL ($urlTail, $extra_args = array()) { // {{{ // TODO use parse_url/parse_str && http_build_url/http_build_query
		if (empty($urlTail)) {
			error_log("Error: calling Ubersmith::_buildURL() with no urlTail");
			return false;
		}

		return $this->baseURL . $urlTail . '?' . $this->_buildQuery($extra_args);

	} // }}}

	private function _buildQuery ($extra_args = array()) { // {{{
		//always list active servers

		$args = $extra_args;
		$args['api_login'] = $this->user;
		$args['api_pass'] = $this->pass;
		if (!isset($args['active']))
			$args['active'] = 1;

		return http_build_query($args);
	} // }}}

	private function _fetchCurlData($url) { // {{{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);    // TODO allow an array of options.
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);    // TODO allow an array of options.
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$data = curl_exec($ch);

		curl_close($ch);

		return $data;
	} // }}}

	private function _array_to_objv($a) { // {{{
			$names = array_shift($a);
			$objv = array();
			for ($i = 0; $i < sizeof($a); ++$i) {
					$irow =& $a[$i];
					$obj = new stdClass;
					for ($ifld = 0; $ifld < sizeof($names); ++$ifld) {
							$fldName = preg_replace('/^"(.*)"$/', '$1', $names[$ifld]);
							$fldValue = preg_replace('/^"(.*)"$/', '$1', $irow[$ifld]);
							$obj->$fldName = $fldValue;
					}
					$objv[] = $obj;
			}
			return $objv;
	} // }}}
}

// vim:foldmethod=marker

