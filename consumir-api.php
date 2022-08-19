<?php
$url = "https://reqres.in/api/users";

$json = file_get_contents($url);
$datos = json_decode($json, true);
$data = $datos['data'];
?>