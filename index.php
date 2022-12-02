<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>
    <!-- BOOTSTRAP CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <a href="./index.php" class="navbar-brand">To Do List</a>
        </div>
    </nav>
    <div class="col-md-3"></div>
    <div class="col-md-6 well">
        <h3  class="text-primary text-center">PHP - To Do List</h3>
        <hr>
        <center>
            <form action="add_task.php" method="POST" class="form-inline">
                <input type="text" name="task" class="form-control" required>
                <button class="btn btn-primary" name="add">Add Task</button>
            </form>
            <br><br>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Task</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                        <?php 
                        
                            require 'conn.php';

                            $sql = $conn->query("SELECT * FROM `task` ORDER BY `task_id` ASC");
                            $count = 1; 
                            while($fetch = $sql->fetch_array()){
                        
                        ?>

                    <tr>
                        <td><?php echo $count++?></td>
                        <td><?php echo $fetch['chore']?></td>
                        <td><?php echo $fetch['status']?></td>
                        <td colspan="2">

                            <?php 

                                if($fetch['status'] != "Done"){
                                    echo '<a href="done_task.php?task_id=' . $fetch['task_id'] . '" class="btn btn-success"><span class="glyphicon glyphicon-check"></span></a> |';
                                } 
                            
                            ?>
                            <a href="delete_task.php?task_id=<?php echo $fetch['task_id']?>" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a>
                        </td>
                    </tr>

                        <?php 
                        
                            }
                        
                        ?>
                        
                </tbody>
            </table>
        </center>
    </div>
</body>   
</html>