<?php

		
function httpGet($url) {
	$curlh = curl_init();
	curl_setopt($curlh, CURLOPT_URL, $url);
	curl_setopt($curlh, CURLOPT_POST, 0);
	curl_setopt($curlh, CURLOPT_HEADER, 0);
	curl_setopt($curlh, CURLOPT_RETURNTRANSFER, 1);
	return curl_exec($curlh);
}	


$a = httpGet('http://kbase.licensecube.com/rss-popular.html');
//$b = httpGet('http://kb.siteserving.com/rss.php?c=&t=recent');

	

  $objDOM = new DOMDocument();
  $objDOM->loadXML($a); 
  $entrada = $objDOM->getElementsByTagName("item");
 /* 
  $objDOM2 = new DOMDocument();
  $objDOM2->loadXML($b); 
  $entrada2 = $objDOM2->getElementsByTagName("item");

*/
  foreach ($entrada as $value) {
    $t = $value->getElementsByTagName("title");
    $title[] = $t->item(0)->nodeValue;
	
	$t = $value->getElementsByTagName("link");
    $link[] = $t->item(0)->nodeValue;
 
  }
 /* 
  foreach ($entrada2 as $value) {
    $t = $value->getElementsByTagName("title");
    $title[] = $t->item(0)->nodeValue;
	
	$t = $value->getElementsByTagName("link");
    $link[] = $t->item(0)->nodeValue;
 
  }
  */



    
	
    $last = 1;	
    for ($i = 0; $i < 5 && $i<count($title); $i++)
	{
			if($last==1){
				$class="class='Bg01'";
				$last=0;
			}
			else {
				$class="";
				$last=1;
			}
			echo "
				  <li ".$class."><a href='".$link[$i]."'>".$title[$i]."</a></li> ";
					
		
	}
	

  
  
  
  
