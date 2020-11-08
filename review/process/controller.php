<?php

include_once("../config/connection.php");
include_once("model.php");

// POST Data
if(isset($_POST['add'])){
    $result = insert($_POST, $conn);
    
    if($result){
        echo "
            <script>
                alert('Berhasil');
                window.location.href='../index.php'
            </script>
        ";
    } else {
        var_dump($result);
        echo "Error";
    }

}

if(isset($_POST["update"])){
    $update = update($_POST, $conn);
    if($update){
        echo "
            <script>
                alert('Berhasil');
                window.location.href='../index.php'
            </script>
        ";
    } else {
        var_dump($result);
        echo "Error";
    }
} 

if(isset($_GET['_id']) && isset($_GET['type'])){
    if($_GET['type'] === "delete"){
        $_id = $_GET['_id'];

        $query = delete($_id, $conn);
        
        if($query){
            echo "
            <script>
                alert('Berhasil');
                window.location.href='../index.php'
            </script>
        ";
        } else {
            var_dump($result);
            echo "Error";
        }
    } else {
        echo "Delete Gagal !";
        header("location:../index.php");
    }
}
