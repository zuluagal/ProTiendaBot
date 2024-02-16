<?php


//Token
$botToken = "6347608243:AAGreOSTeSSKFdA1_g-bOZ01wsF2IcxLPxQ";

// URL publica
$webhookurl = "https://leonardozuluaga.com.co/ProTiendaBot/index.php";

// Webhook mediante solicitud http
$apiurl = "https://api.telegram.org/bot$botToken/setWebhook?url=$webhookurl";
$response = file_get_contents($apiurl);

//Verifica configuración webhook
if($response === false){
    $error = error_get_last();
    echo "Error al configurar el webhook".$error['message'];
}else{
    $responsedata = json_decode($response,true);
    if($responsedata['ok']===true){
        echo "Webhook configurado con exito.";
    }else{
        echo "Error al configurar wh.";
    }
}

//echo $response;

?>