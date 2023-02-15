<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Add New Task</title>
</head>
<body>
    <div class="container">
        <header class="d-flex justify-content-between my-4">
            <h1>Add new Task</h1>
            <div>
                <a href="index.php" class="btn btn-primary">Back</a>
            </div>
        </header>
        <form action="process.php" method="post">
            <div class="form-element my-4">
                <input type="text" class="form-control" name="task" placeholder="Enter Task" >
            </div>
            
            <div class="form-element my-4">
                <input type="text" class="form-control" name="name" placeholder="Name" >
            </div>

            <div class="form-element my-4">
                <select name="type" class="form-control">
                    <option value="">Select Started, Pending or Complited</option>
                    <option value="Start">Start</option>
                    <option value="Started">Started</option>
                    <option value="Pending<">Pending</option>
                    <option value="Complited">Complited</option>
                 </select>
            </div>

            <div class="form-element my-4">
                <input type="text" class="form-control" name="description" placeholder="Description" >
            </div>
            <div class="form-element">
                <input type="submit" class="btn btn-success" name="create" value="Add Task">
            </div>

        </form>
    </div>
</body>
</html>
<!-- \php crud\create.php -->