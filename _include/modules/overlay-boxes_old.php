<?php

$_boxes = array();
function add_overlay_box($box) {
	global $_boxes;
	array_push($_boxes, $box);
}

function overlay_box_onmouseover_js($i, $N) {
	$dev = array();

	$dev[] = "show('overlay$i')";
	$dev[] = "hide('logo$i')";
	$dev[] = "hide('info1')";

	for ($_i = 1; $_i <= $N; ++$_i) {
		if ($_i != $i)
			$dev[] = "hide('info".($_i+1)."')";
		else
			$dev[] = "show('info".($_i+1)."')";
	}

	return implode(';', $dev);
}

function overlay_box_onmouseout_js($i, $N) {
	$dev = array();

	$dev[] = "hide('overlay$i')";
	$dev[] = "show('logo$i')";
	$dev[] = "show('info1')";


	for ($_i = 2; $_i <= $N+1; ++$_i)
		$dev[] = "hide('info$_i')";

	return implode(';', $dev);
}

function show_overlay_boxes() {
	global $_boxes;
	global $img_dir;
	global $ubersmith;
	global $order_process_dirname;

	$nboxes = sizeof($_boxes);

	$ibox = 0;
	foreach ($_boxes as $box) {
		$ibox++;

		$active_licensing = 1;
		$order_now = 'order-now-'.getActualPage().'.png';

		if (array_key_exists('code', $box)) {
			$plan = $ubersmith->getPlanByCode($box['code']);
			$box['price'] = '$' . $plan->price;
			if ($plan->active_licensing == 'no_order') {
				$active_licensing = 0;
				$order_now = 'unavailable-'.getActualPage().'.png';
			}

			if (!array_key_exists('checkout-url', $box)) {
				$box['checkout-url'] = $order_process_dirname . '/' . $plan->lc_url_basename;
				// append ?vps or ?dedicated
				if (preg_match('/\?.*$/', $box['info-url'], $matches_vps_dedi) &&
				    !preg_match("/_" . $matches_vps_dedi[0] . "/", $box['checkout-url'])) {
					$box['checkout-url'] .= $matches_vps_dedi[0];
				}
			}
		}

		$alt_name = preg_replace('/[?]/', '_', basename($box['checkout-url'])) . '_alt';
		$alt_name = preg_replace('/vps_vps_/', 'vps_', $alt_name);
		$alt_name = preg_replace('/dedicated_dedicated_/', 'dedicated_', $alt_name);

		$alt_name_indep = preg_replace('/_vps/', '', $alt_name);
		$alt_name_indep = preg_replace('/_dedicated/', '', $alt_name_indep);

		//echo "<!-- alt_names=$alt_name $alt_name_indep -->";
		global $$alt_name;
		global $$alt_name_indep;
		$alt_value = $$alt_name;

		if (!strlen($alt_value)) {
			$alt_value = $$alt_name_indep;
		}

		echo "<li onmouseover=\"" . overlay_box_onmouseover_js($ibox, $nboxes) . "\" onmouseout=\"" . overlay_box_onmouseout_js($ibox, $nboxes) . "\">";
?>
                        <div class="lc-service-title" style="width:133px"><h2><?php echo $box['title']; ?></h2></div>
						<div id="overlay<?=$ibox?>" class="overlay" style="display:none" onclick="location.href='<?php echo $box['info-url']; ?>'">
							<div class="lc-service-price"><?php echo $box['price']; ?></div>
							<div class="lc-service-price-info"><?php echo $box['period']; ?><br /><?=_('License')?></div>
			<?php if ($active_licensing)  { ?>
							<div style="text-align:center">
                           <!-- <a rel="nofollow" href="<?php echo $box['checkout-url']; ?>"><img src="<?=$img_dir?>/buttons/<?=$order_now?>" alt="<?=$alt_value?>" style="margin-right:auto; margin-left:auto;"/></a>-->
                            
                            <a  rel="nofollow" href="<?php echo $box['checkout-url']; ?>" style="margin-right:auto; margin-left:auto; margin-right:3px; <?php if(getActualPage()=='es') echo "padding:0 10px 0 0; margin-right:1px; ";?>" class="button-orange"><?=_('ORDER NOW')?><span <?php if(getActualPage()=='es') echo "style='padding-right:10px !important;'";?>></span></a>
                            </div>
			<?php } else { ?>
							<div  style="text-align:center">
                               <img src="<?=$img_dir?>/buttons/<?=$order_now?>" alt="<?=$alt_value?>"/>
                            
                            </div>
			<?php } ?>
						</div>
                         <?php if($box['bg-position']=='') :?>
						<div class="logo" style="text-align:center; display:" ><img src="<?=$img_dir?>/<?=$box['logo']?>" alt="<?=$alt_value?>" /></div>
                        <?php else : ?>
                        <div id="logo<?=$ibox?>" class="logo" style="text-align:center; display:"  ><div style="background-image:url(<?php echo $img_dir?>/<?php echo $box['bg-image'] ?>.jpg); background-position:<?=$box['bg-position']?>px 0px;   width:125px; height:118px;"></div></div>
                        <?php endif; ?>
                  </li>
<?php
	}
}

function show_overlay_boxes_2($tail) {
	global $_boxes;
	global $img_dir;
	global $ubersmith;
	global $order_process_dirname;

	$nboxes = sizeof($_boxes);

	$ibox = 0;
	foreach ($_boxes as $box) {
		
		$ibox++;
				
		$infodivid = $box['infodivid'];
		$onmouseover = "show('".$infodivid."');hide('info');show('overlay${ibox}${tail}')"; 		
		$onmouseout = "hide('".$infodivid."');show('info');hide('overlay${ibox}${tail}')";
		
		/*$onmouseover = "show('info${ibox}');hide('info');show('overlay${ibox}${tail}')";
		$onmouseout = "hide('info${ibox}');show('info');hide('overlay${ibox}${tail}')";*/
		$style = '';
		if ($ibox == $nboxes) {
			$style = ' style="border-right:none"';
		}

		$active_licensing = 1;
		$order_now = 'order-now-'.getActualPage().'.png';
		
		if (array_key_exists('code', $box)) {
			$plan = $ubersmith->getPlanByCode($box['code']);
			$box['price'] = '$' . $plan->price;
			if ($plan->active_licensing == 'no_order') {
				$active_licensing = 0;
				$order_now = 'unavailable-'.getActualPage().'.png';
			}

			if (!array_key_exists('checkout-url', $box)) {
				$box['checkout-url'] = $order_process_dirname . '/' . $plan->lc_url_basename;
				// append ?vps or ?dedicated
				if (preg_match('/\?.*$/', $box['info-url'], $matches_vps_dedi) &&
				    !preg_match("/_" . $matches_vps_dedi[0] . "/", $box['checkout-url'])) {
					$box['checkout-url'] .= $matches_vps_dedi[0];
				}
			}
		}

		$alt_name = preg_replace('/[?]/', '_', basename($box['checkout-url'])) . '_alt';
		$alt_name = preg_replace('/vps_vps_/', 'vps_', $alt_name);
		$alt_name = preg_replace('/dedicated_dedicated_/', 'dedicated_', $alt_name);

		$alt_name_indep = preg_replace('/_vps/', '', $alt_name);
		$alt_name_indep = preg_replace('/_dedicated/', '', $alt_name_indep);
		
		if (eregi('vps', $box['info-url']))
			$licenseType="vps";
		else
			$licenseType="dedicated";
		// echo "<!-- alt_names=$alt_name $alt_name_indep -->";
		global $$alt_name;
		global $$alt_name_indep;
		$alt_value = $$alt_name;

		if (!strlen($alt_value)) {
			$alt_value = $$alt_name_indep;
		}

		?>
		<li onclick="location.href='<?=$box['info-url']?>'" onmouseover="<?=$onmouseover?>" onmouseout="<?=$onmouseout?>">
			<div class="lc-service-title" style="width: 133px"><h2><?=$box['title']?></h2></div>
			
            <?php if($box['bg-position']=='') :?>
						<div class="logo" style="text-align:center; display:" ><img src="<?=$img_dir?>/<?=$box['logo']?>" alt="<?=$alt_value?>" /></div>
                        <?php else : ?>
                        <div id="logo<?=$ibox?>-<?=($licenseType) ?>" class="logo" style="text-align:center; display:" ><div style="background-image:url(<?php echo $img_dir?>/<?php echo $box['bg-image'] ?>.jpg); background-position:<?=$box['bg-position']?>px 0px;   width:125px; height:118px;"></div></div>
                        <?php endif; ?>
            
            
			<div id="overlay<?=$ibox.$tail?>" class="overlay" style="display:none">
				<div class="lc-service-price"><?=$box['price']?></div>
				<div class="lc-service-price-info"><?=$box['period']?><br /><?=_('License')?></div>
			<?php 
			
			if ($active_licensing)  { ?>
				<!--<a rel ="nofollow" href="<?=$box['checkout-url']?>"><img src="<?=$img_dir?>/buttons/<?=$order_now?>" width="116" height="33" alt="<?=$alt_value?>" <?=$style?>/></a>-->
                <a  rel="nofollow" href="<?php echo $box['checkout-url']; ?>" style="margin-right:auto; margin-left:auto; margin-right:3px; <?php if(getActualPage()=='es') echo "padding:0 10px 0 0; margin-right:1px; ";?>" class="button-orange"><?=_('ORDER NOW')?><span <?php if(getActualPage()=='es') echo "style='padding-right:10px !important;'";?>></span></a>
			<?php } else { ?>
				<!--<img src="<?=$img_dir?>/buttons/<?=$order_now?>" width="116" height="33" alt="<?=$alt_value?>" <?=$style?>/>-->
                
                 <a  rel="nofollow" href="javascript: return false;" style="margin-right:auto; margin-right:4px; margin-left:auto; padding:0 15px 0 0;  <?php if(getActualPage()=='es') echo "padding:0 10px 0 0; margin-right:2px; ";?>" class="button-grey"><?=_('Unavailable')?><span <?php if(getActualPage()=='es') echo "style='padding-right:10px !important; padding-right:15px !important'";?> ></span></a>
                
			<?php } ?>
			</div>
		</li>
		<?php
	}
}

