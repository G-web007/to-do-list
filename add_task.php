<?php 

    require 'conn.php';

    if(isset($_POST['add'])){
        if($_POST['task'] != ""){
            $task = $_POST['task'];

            $conn->query("INSERT INTO `task` VALUES ('', '$task', '')");
            header('location: index.php');
        }
    }

?>