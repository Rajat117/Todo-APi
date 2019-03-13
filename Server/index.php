<?php 
header('Access-Control-Allow-Origin: *');

include "../config/connection.php" ;

$task = $_POST['text1'];


$sql= "INSERT INTO TASKS (caption) VALUES ('$task')";

if ($conn->query($sql) === TRUE) //conn is the connection varible
{ 
    $last_id = $conn->insert_id;
    $result = mysqli_query($conn,"SELECT * FROM Tasks WHERE id=$last_id");
    $todo=[];
    while ($row = mysqli_fetch_assoc($result)) {
        $item['caption']=$row['caption'];
        $item['id']=$row['id'];
        $item['is_completed']=$row['is_completed'];
        array_push($todo , $item);
    }
    echo json_encode($todo);

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

 
?>
