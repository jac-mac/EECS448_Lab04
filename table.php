<?php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);
  function multiply($x, $y) {
    $z = $x * $y;
    return $z;
  }

  $rows = 100;
  $cols = 100;
  echo "<table>";
    for($r = 1; $r <= ($rows+1); $r++)
    {
        echo "<tr>";
	if($r == 1)
	   echo "<td> </td>";
	else
	   echo "<td><b>" . ($r-1) . "</b> </td>";
        for($c = 1; $c <= $cols; $c++)
        {
	   if($r == 1)
              echo "<td><b>" . multiply($r, $c) . "</b> " . "</td>";
	   else
	      echo "<td>" . multiply(($r-1), $c) . " " . "</td>";
        }
        echo "</tr>";
    }
  echo "</table>";
?>
