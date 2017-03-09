<?php 

function kbase_categories(){
	$mySQLServer	= 'localhost';
	$mySQLUsername	= 'kbaselic_kb';
	$mySQLPassword	= 'RyidIh7sPasJ';
	$mySQLDatabase	= 'kbaselic_kb';
	
	$connection = @mysql_connect($mySQLServer,$mySQLUsername,$mySQLPassword) or die('Could not connect to MySQL Database Server');
	(function_exists('mysql_set_charset'))?@mysql_set_charset('utf8',$connection):@mysql_query('SET NAMES utf8', $connection);
	@mysql_select_db($mySQLDatabase,$connection) or die('Could not select the Knowledgebase Database.');
	$section_name = 'Admin';

	

	
	$a=mysql_query("(SELECT DISTINCT phpkb_categories.category_id, category_name, category_description FROM phpkb_categories JOIN phpkb_relations ON phpkb_categories.category_id = phpkb_relations.category_id JOIN phpkb_articles ON phpkb_relations.article_id = phpkb_articles.article_id WHERE parent_id=0 and category_status='public' AND category_show='yes' AND phpkb_categories.language_id=1 AND phpkb_articles.article_status = 'approved' ) UNION (select phpkb_categories.category_id, category_name, category_description FROM phpkb_categories where category_id=10) UNION (select phpkb_categories.category_id, category_name, category_description FROM phpkb_categories where category_id=33) ORDER BY category_name");
	$total=mysql_num_rows($a);
	$i=1;
	while($b=mysql_fetch_array($a)){
		$class='';
		
		if($total==$i) $class="class='NoBoderBtm'"; else $class=""; 
		
		echo "<li ".$class."><a title='".$b['category_name']."' href='http://kbase.licensecube.com/".strtolower(str_replace(" ", "-", $b['category_name']))."/'>".$b['category_name']."</a></li>";
		$i++;
	}
	
}


function amountArticles(){
	$mySQLServer	= 'localhost';
	$mySQLUsername	= 'kbaselic_kb';
	$mySQLPassword	= 'RyidIh7sPasJ';
	$mySQLDatabase	= 'kbaselic_kb';
	
	$connection = @mysql_connect($mySQLServer,$mySQLUsername,$mySQLPassword) or die('Could not connect to MySQL Database Server');
	(function_exists('mysql_set_charset'))?@mysql_set_charset('utf8',$connection):@mysql_query('SET NAMES utf8', $connection);
	@mysql_select_db($mySQLDatabase,$connection) or die('Could not select the Knowledgebase Database.');
	$section_name = 'Admin';
	
	$sum = mysql_result(mysql_query("SELECT COUNT(article_id) as cant FROM phpkb_articles WHERE article_show='yes' AND article_status ='approved' AND ( (article_expiry_date = '0000-00-00') OR (article_expiry_date <> '0000-00-00' AND article_expiry_date >= now()) )"),0,0);
return ($sum);
}

?>