<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Task description</title>
    <style>
        .task-details{
            background-color: #ccc;
            border: 1px solid #ccc;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
            <header class="d-flex justify-content-between my-4">
                <h1>Task Description</h1>
                <div>
                    <a href="index.php" class="btn btn-primary">Back</a>
                </div>
            </header>
            <div class="task-details my-4">
                <?php
                    if(isset($_GET['id'])){
                        $id = $_GET['id'];
                        include("connect.php");
                        $sql = "SELECT * FROM tasks WHERE id = $id";
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_array($result);
                        $task = $row['task'];
                        $name = $row['name'];
                        $type = $row['type'];
                        $description = $row['description'];
                    }
                ?>
                <h2>Title</h2>
                <p><?php echo $row['task']; ?></p>
                <h2>Name</h2>
                <p><?php echo $row['name']; ?></p>
                <h2>Type</h2>
                <p><?php echo $row['type']; ?></p>
                <h2>Description</h2>
                <p><?php echo $row['description']; ?></p>






            </div>
    </div>

    
</body>
</html>