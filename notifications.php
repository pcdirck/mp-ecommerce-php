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

	header('Content-Type: application/json');
	echo json_encode(['HTTP/1.1 200 OK'], 200);
	file_put_contents('webhooks.log',json_encode($_POST));

?>