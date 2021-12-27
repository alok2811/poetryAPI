<?php

header('Content-Type: application/json; charset=utf-8');

$hostName = 'localhost';
$userName = 'root';
$userPass = '';
$dbName = 'poetrydb';

$conn = mysqli_connect($hostName,$userName,$userPass,$dbName);

if(!$conn){
	$response['status']="404";
  	$response['message']="Conaction failed!";
  	echo json_encode($response);
	die();
}


?>