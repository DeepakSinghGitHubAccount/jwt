<?php
include('./vendor/autoload.php');
use \Firebase\JWT\JWT;

$data = json_decode(file_get_contents("php://input"));

var_dump($data);
?>