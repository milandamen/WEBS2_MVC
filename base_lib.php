<?php
set_include_path('./Views/assets/Smarty-3.1.21/libs');
require_once('Smarty.class.php');
$smarty = new Smarty();

/**
	Returns 'GET' if a get request happened, else returns 'POST'.
*/
function getHttpMethod() {
	if (count($_POST)) {
		return 'POST';
	} else {
		return 'GET';
	}
}

function tofloat($num) {
	$dotPos = strrpos($num, '.');
	$commaPos = strrpos($num, ',');
	$sep = (($dotPos > $commaPos) && $dotPos) ? $dotPos : ((($commaPos > $dotPos) && $commaPos) ? $commaPos : false);
	if (!$sep) {
		return floatval(preg_replace("/[^0-9]/", "", $num));
	}
	return floatval(
		preg_replace("/[^0-9]/", "", substr($num, 0, $sep)) . '.' .
		preg_replace("/[^0-9]/", "", substr($num, $sep+1, strlen($num)))
	);
}
?>