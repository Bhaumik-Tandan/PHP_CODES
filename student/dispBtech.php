<?php
include 'db.php';
function dispBtech()
{
    $conn=db();
    $sql = "SELECT * FROM students where branch='BTECH(IT)'";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) 
          echo $row["name"]. "-" . $row["regno"] . "<br>";      
}

dispBtech();
?>