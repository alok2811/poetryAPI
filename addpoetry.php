<?php

 require 'connection.php';
 header('Content-Type: application/json; charset=utf-8');

$POETRY = $_POST['poetry'];
$POET_NAME = $_POST['poet_name'];


$query = "INSERT INTO poetry(poetry_data,poet_name) VALUES('$POETRY', '$POET_NAME')";


$result = $conn->query($query);
 

if($result == 1){
$response = array("status"=> "1", "message"=>"Poetry sucessfully inserted");
}else{
$response = array("status"=> "0", "message"=>"Poetry not sucessfully inserted");
}

echo json_encode($response);

?>
