<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Task List</title>
</head>
<body>
<div class="container">

<div class="row">
            <div class="col-md-10">
                <div class="card">
                <div class="card-header">
        <header class="d-flex justify-content-between my-4">
            <h1>Task List</h1>
            <div>
                <a href="create.php" class="btn btn-primary">Add new Task</a>
            </div>
        </header>
        </div>
    <!-- create -->
<?php 
session_start();
if(isset($_SESSION['create'])){
    ?>
    <div class="alert alert-success">
        <?php 
        echo $_SESSION['create']; 
        unset($_SESSION['create']);
        ?>
    </div>
    <?php
   
}
?>

<!--  Uppdate -->
<?php 

if(isset($_SESSION['edit'])){
    ?>
    <div class="alert alert-success">
        <?php echo $_SESSION['edit']; 
        unset($_SESSION['edit']);
        ?>
    </div>
    <?php
    
}
?>

<!-- Delete -->
<?php 

if(isset($_SESSION['delete'])){
    ?>
    <div class="alert alert-success ">
        <?php echo $_SESSION['delete']; 
        unset($_SESSION['delete']);
        ?>
    </div>
    <?php
    
}
?>
<div class="card-body">
<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Task</th>
            <th>Name</th>
            <th>Type</th>
            <!-- <th>Description</th> -->
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include("connect.php");
        $sql = "SELECT * FROM tasks";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['task']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['type']; ?></td>
                    <!-- <td><?php echo $row['description']; ?></td> -->
                    <td class="d-flex justify-content-center ">
                      <a href="view.php?id=<?php echo $row['id']; ?>" class="btn btn-info">Read More</a>
                        <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Edit</a>
                        <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php
            }
        }else{
            echo "No record found!";
        }
        ?>
    </tbody>

</table>
</div>
</div>

</div>
</div>
</div>
    
</body>
</html>