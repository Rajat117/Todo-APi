<?php 

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: DELETE");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');
 

include "../config/connection.php" ; 

$i=file_get_contents('php://input');
parse_str($i);
$sql="DELETE FROM TASKS WHERE id=$text1";

if ($conn->query($sql) === TRUE) 
{ 
    echo $text1;

} else {
    echo "Error: ".$text1."cdcd". $sql . "<br>" . $conn->error;
}
?>