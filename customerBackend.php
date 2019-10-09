<?php
 $wicked = $_POST['wickedGnome'];
 $hippy = $_POST['hippyGnome'];
 $flower = $_POST['flowerGnome'];
 $shipping = $_POST['shipping'];
 $userName = $_POST['userName'];
 $password = $_POST['password'];

 $WICKED_COST = 11.25;
 $HIPPY_COST = 7.95;
 $FLOWER_COST = 1000;


echo "<h1>Welcome " . $userName . "! Your password is: " . $password . ".<br>";

echo "<table>";
 echo "<tr>
         <th>       </th>
         <th>Quantity</th>
         <th>Cost Per Item</th>
         <th>Sub Total</th>
       </tr>";
 // echo "<tr>
 //         <td>Wicked Gnome</td>
 //         <td>" . $wicked . "</td>
 //        <td>" . $WICKED_COST . "</td>
 //         <td>" . ($WICKED_COST*$wicked) . "</td
 //       </tr>"
echo "</table>";

?>
