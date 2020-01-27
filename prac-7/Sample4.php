<?php
	$json='{"Name" : "Hari","Age":22}';
	$arr=json_decode($json,true);
	echo $arr["Name"];
	echo $arr["Age"];
?>