<?php 
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: PUT");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');

include "../config/connection.php" ; 

$result=file_get_contents('php://input');
parse_str($result);
$stat=intval($status);
$sql="UPDATE TASKS SET CAPTION = '$name',IS_COMPLETED = $stat WHERE id=$id";
if($conn->query($sql) === TRUE)
{
    
$users = [
        "name" => $name,
        "id" => $id,    
];
echo json_encode($users);
}
else
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
<?php 
