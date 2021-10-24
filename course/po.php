<html>
<body>
        <table>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  echo "<tr>
  <th>Name</th>
  <th>Register No</th>
  <th>Course Code</th>
  <th>Course Name</th>
  <th>Credits</th>
  </tr>";
  $n = $_POST['n'];
  $r = $_POST['r'];
  $cc = $_POST['cc'];
  $cn = $_POST['cn'];
  $cr = $_POST['cr'];
  echo "<tr><td>";
  if (empty($n)) {
    echo "EMPTY";
  } else {
    echo $n;
  }
echo "</td>";
echo "<td>";
if (empty($r)) {
  echo "EMPTY";
} else {
  echo $r;
}
echo "</td>";
echo "<td>";
if (empty($cc)) {
  echo "EMPTY";
} else {
  echo $cc;
}
echo "</td>";
echo "<td>";
if (empty($cn)) {
  echo "EMPTY";
} else {
  echo $cn;
}
echo "</td>";
echo "<td>";
if (empty($cr)) {
  echo "EMPTY";
} else {
  echo $cr;
}
echo "</td></tr>";
}
//store in array
$arr=Array($n,$r,$cc,$cn,$cr);
?>
</table>
</body>
</html>