<?php

require __DIR__ .  '/vendor/autoload.php';
   
  MercadoPago\SDK::setAccessToken('APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398');
  
  switch($_POST["type"]) {
		case "payment":
			$data = MercadoPago\Payment::find_by_id($_POST["id"]);
		break;

		case "plan":
			$data = MercadoPago\Plan.find_by_id($_POST["id"]);
		break;

		case "subscription":
			$data = MercadoPago\Subscription.find_by_id($_POST["id"]);
		break;

		case "invoice":
			$data = MercadoPago\Invoice.find_by_id($_POST["id"]);
		break;

	}

	$archivo = fopen("webhooks.log","a");
	fwrite($archivo,json_encode($_POST,JSON_PRETTY_PRINT));
	fwrite($archivo,"\n");
	fwrite($archivo,json_encode($data,JSON_PRETTY_PRINT));
	fwrite($archivo,"\n");
	fclose($archivo);
	//http_response_code(200);

?>