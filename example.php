<?php

$order_id = $_REQUEST['order_id'];
$item_id = $_REQUEST['item_id'];
$domain = $_REQUEST['refer'];
$url = "https://webostock.com/licenses/v1/?key=$order_id&item_id=$item_id&domain=$domain";
$curl = curl_init($url);


curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_HTTPHEADER,$header);
$WebosRes = curl_exec($curl);
curl_close($curl);
$WebosRes = json_decode($WebosRes);

if(isset($WebosRes->status) && $WebosRes->status == 'active')
$license_valid = true;
