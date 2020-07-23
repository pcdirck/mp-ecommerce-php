<?php
session_start();
if(isset($_REQUEST["back_url"])){
	$id = $_REQUEST["payment_id"];
	$json = file_get_contents("https://api.mercadopago.com/v1/payments/{$id}?access_token=APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398");
	$obj = json_decode($json);
	if( isset($_SESSION["transfer"])){
		unset($_SESSION["transfer"]);
	}
	$_SESSION["transfer"]["payment_id"] = $id;
	$_SESSION["transfer"]["transaction_amount"] = $obj->transaction_amount;
	$_SESSION["transfer"]["external_reference"] = $obj->external_reference;
	$_SESSION["transfer"]["payment_method_id"] = $obj->payment_method_id;


	//header('Location: '.$_REQUEST["back_url"]);
	//die();
}


echo "<pre>";
echo json_encode(json_decode($json), JSON_PRETTY_PRINT);
echo "</pre>";


?>