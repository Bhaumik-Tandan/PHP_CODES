<?php
include 'db.php';
   function createTable()
   {
    $sql = "CREATE or replace TABLE students (
        regno VARCHAR(15) unique,
        name VARCHAR(30),
        branch VARCHAR(20)
        )";
        
        $conn=db(); 
        
        return $conn->query($sql);
   }
?>  