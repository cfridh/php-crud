<?php 
include("connect.php" );
if(isset($_POST['create'])){
    $task = mysqli_real_escape_string($conn, $_POST['task']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $type = mysqli_real_escape_string($conn, $_POST['type']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
   

    $sql = "INSERT INTO tasks (task, name, type, description) VALUES ('$task', '$name', '$type', '$description')";
    if(mysqli_query($conn, $sql)){
        echo "Task Added Successfully!";
    }else{
        die("Error: ");
    }
}

?>

