<?php
	header('Content-Type: application/json');
	$arr = array('a'=>1,'b'=>2,'c'=>3);
	$jsonstring = json_encode($arr);
	echo $jsonstring;
?>