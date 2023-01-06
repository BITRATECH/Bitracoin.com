<?php

// API endpoint URL
$api_url = "https://api.covalenthq.com/v1/56/tokens/0xb98ba5ea6fd49bbbfab5121d2d9a75cd20e69040/token_holders/?key=ckey_13d748f2ec3c494fba2fbbf61b4";

// API endpoint'ini çağırın ve cevabı alın
$response = file_get_contents($api_url);

// Dönen veriyi işleyin
$result = json_decode($response, true);

// İlk cüzdana ait balance
$first_wallet_balance = $result['data']['items'][0]['balance'];

// Total supply
$total_supply = $result['data']['items'][0]['total_supply'];

// Circulating supply = Total supply - First wallet balance
$circulating_supply = $total_supply - $first_wallet_balance;

$circulating_supply_json = array(
    "name" => "BitraToken",
    "ticker" => "BITRA",
    "price" => $circulating_supply / 1e18
);

echo json_encode($circulating_supply_json);

?>
