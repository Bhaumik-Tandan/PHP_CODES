<?php
include 'createTable.php';
createTable();
?>

<html>
<body>
<form method="post" action="insStd.php">
  Student Registration Number<br> <input type="text" name="rn"><br>
  Name<br> <input type="text" name="n"><br>
  Branch<br> <input type="text" name="br"><br>
  <input type="submit">
</form>
</body>
</html>

