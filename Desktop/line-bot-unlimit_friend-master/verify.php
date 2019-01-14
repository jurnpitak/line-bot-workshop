<?php
$access_token = 'sjgQeYbzuRD33xv2kF2gp0W+UOMs/KanzXg9p+Cv25rDBhkpmka1TMWPaaT56Z97J5DNxbo0qFCzDIVNjWw0kQn1zql38QtlAjBmA8itb7y8Bk1u2sGCWtGRoE6XyKTD/hI7weLZzUAu8evjs2kILgdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
