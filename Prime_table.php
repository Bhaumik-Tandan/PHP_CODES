<style type="text/css">
    table, th, td {
  border: 1px solid black;
}
    </style>
<?php
function prime($n)
{
   if ($n == 1)
   {
       echo "No";
       return;
   }
   $s= sqrt($n);
   for ($i = 2; $i <= $s; $i++)
      if ($n% $i == 0){
        echo "No";
      return;
      }
   echo "Yes";
}

echo "<table>";
echo "<tr><th>No.</th><th>Even?<th>Prime?</th></tr>";
for ($x = 1; $x <= 10; $x++) {
    echo "<tr>";
    echo "<td>$x</td>" ;
    echo "<td>";
    if(fmod($x, 2)==0)
    echo "Yes";
    else
    echo "No";
    echo "</td>";
    echo "<td>";
    prime($x);
    echo "</td>";
    echo "</tr>";
}
echo "</table>";
?>
