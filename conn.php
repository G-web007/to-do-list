<?php  

    $server = "localhost";
    $username = "root";
    $pass = "";
    $db_name = "db_task";

    //CONNECTION
    $conn = new mysqli($server, $username, $pass, $db_name);

    //TO CHECK THE CONNECTION
    if($conn->connect_error){
        die($conn->connect_error);
    } 

?>