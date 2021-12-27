<?php
 require 'connection.php';
 header('Content-Type: application/json; charset=utf-8');
 
$query = "SELECT * FROM poetry";

$result = $conn->query($query);


$row = $result ->fetch_all(MYSQLI_ASSOC);

if(empty($row)){
$response = array("status"=> "0", "message"=>"Record is empty", "data" => $row);
}
else{
$response = array("status"=> "1", "message"=>"Record available", "data" => $row);
}

echo json_encode($response);

?>