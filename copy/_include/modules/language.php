<?php
function getPath($lang) {
	$urls_pt = file($_SERVER['DOCUMENT_ROOT']."/../aliases-".$lang.".conf");
	foreach ($urls_pt as $oneUrl) {
		if (preg_match("/Alias\s(.*)\s*".str_replace("/", "\/",str_replace("/index.php", "",$_SERVER['SCRIPT_FILENAME']))."$/", $oneUrl, $matches)) {
			return $matches[1];
		}
	}
}


$path_en = str_replace($_SERVER['DOCUMENT_ROOT'], "", $_SERVER['SCRIPT_FILENAME']);
$path_es = getPath('es');
$path_pt = getPath('pt');
?>
<script type="text/javascript">
	var paths = new Array();
	paths['en'] = "<?php echo $path_en?>";
	paths['es'] = "<?php echo $path_es?>";
	paths['pt'] = "<?php echo $path_pt?>";
	<?php //echo str_replace("/", "\/",str_replace("/inde.php", "",$_SERVER['SCRIPT_FILENAME']))?>
</script>

