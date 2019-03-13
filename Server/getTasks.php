<?php 
header('Access-Control-Allow-Origin: *'); 
require "../config/connection.php" ; 

$name=$_GET['text1'];
global $conn;
$rows = mysqli_query($conn,"SELECT * FROM Tasks");
$todo=[];
while ($row = mysqli_fetch_assoc($rows)) {
    $item['caption']=$row['caption'];
    $item['id']=$row['Id'];
    $item['is_completed']=$row['is_completed'];
    array_push($todo , $item);
}
echo json_encode($todo);

?> 