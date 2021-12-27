<?php


 require 'connection.php';
 header('Content-Type: application/json; charset=utf-8');

$ID = $_POST['id'];

$query = "DELETE FROM poetry WHERE id = '$ID'";


$result = $conn->query($query);
 

if($result == 1){
$response = array("status"=> "1", "message"=>"Poetry sucessfully deleted");
}else{
$response = array("status"=> "0", "message"=>"Poetry not deleted");
}


echo json_encode($response);


?>