<?php require_once '_include/classes/class.RateLimit.php';	?>
<?php

	if (RateLimit::hit("licensecube", 'price-control-panel', 1, 'day')) {
		$rss = file("_include/modules/price-control-panel.html"); 
		echo $rss[0];
		
	} else {
		include_once("_include/modules/ubersmith.php"); 
		$price = $ubersmith->getPlanByCode('LIN0')->price;
		echo $price;
		file_put_contents("_include/modules/price-control-panel.html", $price);
	}

?>