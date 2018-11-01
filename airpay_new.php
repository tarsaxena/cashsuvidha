<?php

$url = "https://www.cashsuvidha.com/my_admin/leadsStatus";
$headers = array(
                 "Product-Key:mvrfi%k7p,q-m6h",
                 "Authorization-Key:admin@airpay",
                 "Authorization-Name:Airpay Payment Services",
                 "Authorization-User:Mitul Kathuria",
                 "Authorization-Email:mitul.kathuria@airpay.co.in",
                 "Authorization-Pass:7840879999",
                 "Authorization-Type:basic",
                 );
 
//print_r($headers_data);

// PHP cURL  for https connection with auth
$curl_handle = curl_init();
//curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
curl_setopt($curl_handle, CURLOPT_URL, $url);
curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl_handle, CURLOPT_HEADER, false); 
curl_setopt($curl_handle, CURLOPT_HTTPHEADER, $headers);

$buffer = curl_exec($curl_handle);

curl_close($curl_handle);
//echo "<pre>";
$data = json_decode($buffer);
print_r($buffer);
//print_r($response);
/*echo "<pre>";
print_r($sa);*/

//var_dump(json_decode($json, true));
//print_r(json_decode($result));


?>