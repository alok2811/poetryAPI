<?php

 require 'connection.php';
 header('Content-Type: application/json; charset=utf-8');


$POETRY = $_POST['poetry'];
$ID = $_POST['id'];

$query = "UPDATE 'poetry' SET 'poetry_data' = '$POETRY' WHERE id = '$ID'";

$result = $conn->query($query);

if($result){
$response = array("status"=> "1", "message"=>"Poetry sucessfully updated");
}else{
$response = array("status"=> "0", "message"=>"Poetry not updated");
}


//UPDATE `poetry` SET `poet_name` = 'Galib mirza' WHERE `poetry`.`id` = 1


?>