<?php 

    require "conn.php";

    if($_GET['task_id']){
        $task_id = $_GET['task_id'];

        $sql = $conn->query("DELETE FROM `task` WHERE `task_id` = $task_id");
        header('location: index.php');
    }


?>