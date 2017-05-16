<?php
	header('Content-type:application/json');
	$jsoncallback = htmlspecialchars($_REQUEST['callback']);
	$json_data='["result1","result2","result3"]';
	echo $jsoncallback."(".$json_data.")";
?>