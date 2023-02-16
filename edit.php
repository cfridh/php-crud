<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Edit New Task</title>
</head>
<body>
    
    <div class="container">
    <div class="row">
            <div class="col-md-10">
                <div class="card">
                <div class="card-header">
        <header class="d-flex justify-content-between my-4">
            <h1>Edit Task</h1>
            <div>
                <a href="index.php" class="btn btn-primary">Back</a>
            </div>
        </header>
        </div>
        <?php
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            include("connect.php");
            $query = "SELECT * FROM tasks WHERE id = $id";
            $result = mysqli_query($conn, $query);
            if (mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_array($result);
                $task = $row['task'];
                $name = $row['name'];
                $type = $row['type'];
                $description = $row['description'];
            }
        }
        ?>
<div class="card-body">
        <form action="process.php" method="post">
            <div class="form-element my-4">
                <input type="text" class="form-control" name="task" placeholder="Enter Task" value="<?php echo $row['task']; ?>">
            </div>
            
            <div class="form-element my-4">
                <input type="text" class="form-control" name="name" placeholder="Name" value="<?php echo $row['name']; ?>">
            </div>

            <div class="form-element my-4">
                <select name="type" class="form-control">
                    <option value="">Select Started, Pending or Complited</option>
                    <option value="Start" <?php if($row['type']=="Start"){echo "selected";} ?> >Start</option>
                    <option value="Started" <?php if($row['type']=="Started"){echo "selected";} ?> >Started</option>
                    <option value="Pending<" <?php if($row['type']=="Pending"){echo "selected";} ?> >Pending</option>
                    <option value="Complited" <?php if($row['type']=="Complited"){echo "selected";} ?> >Complited</option>
                 </select>
            </div>

            <div class="form-element my-4">
                <input type="text" class="form-control" name="description" placeholder="Description" value="<?php echo $row['description']; ?>">
            </div>
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <div class="form-element">
                <input type="submit" class="btn btn-success" name="edit" value="Uppdate Task">
            </div>

        </form>
    </div>

    </div>

</div>
</div>
</div>
</body>
</html>
<!-- \php crud\create.php -->