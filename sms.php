<?php

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://konnect.kirusa.com/api/v1/Accounts/your_account_id/Messages",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => "{\r\"id\":\"1BWylT5fp8sVs2XlMrNXxw==\",\r\"from\":\"91888200XXXX\",\r\"to\":[\"080621765\",\r\"sender_mask\":\"KONNECT\",\r\"body\":\"Your charging for Subscription is successful, you are subscribed for a period of 30 days\"\r}\r",
    CURLOPT_HTTPHEADER => array(
        "Authorization: your_api_token",
        "Content-Type: application/json"
    )
));

$response = curl_exec($curl);
$err      = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    echo $response;
}