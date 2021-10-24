<?php
include 'db.php';
  function insStd($rn,$n,$br)
  {
    $conn=db();
    $sql = "insert into students values (${rn},${n},${br})";
    return $conn->query($sql);
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") 
  insStd($_POST['rn'],$_POST['n'],$_POST['br']);
?>