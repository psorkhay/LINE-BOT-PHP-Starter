<?php
$access_token = 'UQ/cCzgXdQlAB+/w4W4pBWuGRaVddGrs/UgC4U05kaaq9M5OVKZE2HcB6T/73pQ8iBjtr864tuq3wKca7XeYkGqae4okCad1W4Z1fYp57uDwcRlrFLEBSiYKtRI19vB30iYKk6waarKo+tnpIkek5QdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
