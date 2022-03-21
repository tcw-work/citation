<?php
$title = "引用サイト";
$body = "引用サイトからお知らせを通知いたします";
$url = "https://citation.t-creative-works.com/";
$apikey = "4285c5d706164b88a8356d19b8f73d64";

$apiurl = "https://api.push7.jp/api/v1/0a82bcbd76cd49fd9a75a00a2350e5a9/send";

$headers =  array(
    'Content-Type' => 'application/json',
);

$data = array(
    'title' => $title,
    'body' => $body,
    'url' => $url,
    'apikey' => $apikey
);

$data = json_encode($data);

$ch = curl_init();
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL,$apiurl);
$result=curl_exec($ch);
echo 'RETURN:'.$result;
curl_close($ch);
?>