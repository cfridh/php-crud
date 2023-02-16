<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    include("connect.php");
    $sql = "DELETE FROM tasks WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        session_start();
        $_SESSION['message'] = "Task Deleted Successfully!";
        header("Location: index.php");
        
    } else {
        die("Error: ");
    }
}
?>