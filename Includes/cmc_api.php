<?php

//Burada CMC üzerinden BitraToken'a ait güncel fiyat API verisi çekilmektedir.

// API anahtarı girilir
$api_key = "09867f58-8e81-423c-93f1-ad6f225aa1fb";

// Token ID girilir
$currency_id = "22667";

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://pro-api.coinmarketcap.com/v1/cryptocurrency/quotes/latest?id=$currency_id");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "X-CMC_PRO_API_KEY: $api_key"
]);

$response = curl_exec($ch);

if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}

curl_close ($ch);

$response = json_decode($response, true);

// Fiyat bir değişkene atanır.
$price = $response['data'][$currency_id]['quote']['USD']['price'];

// Fiyat "0"'dan sonra 4 rakam gösterilecek şekilde formatlanır.
$formatted_price = number_format($price, 4);

?>