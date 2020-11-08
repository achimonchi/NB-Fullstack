<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "review_bootcamp";

    $conn = new mysqli($host, $user, $pass, $dbname); // return object MYSQLI
    
    if($conn->connect_error){
        die("Connection Failed !");
    }