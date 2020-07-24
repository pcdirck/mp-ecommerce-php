<?php

$data = $_POST['type'];

if (!empty($data)){
	$filename = 'webhooks.log';
	$handle = fopen($filename, "w");
	fwrite($handle, $data);
	fclose($handle);
	echo $file;
}

?>