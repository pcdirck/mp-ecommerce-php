<?php

$data = json_encode($_REQUEST);

$filename = 'webhooks.log';
$handle = fopen($filename, "w");
fwrite($handle, $data);
fclose($handle);

/*
$data = $_POST['type'];

if (!empty($data)){
	$filename = 'webhooks.log';
	$handle = fopen($filename, "w");
	fwrite($handle, $data);
	fclose($handle);
	echo $file;
}
*/

?>