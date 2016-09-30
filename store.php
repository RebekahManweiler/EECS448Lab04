<?php
//calculate values
$email = $_POST["emailAddress"];
$password = $_POST["password"];
$yahtzeevalue = $_POST["numYahtzee"];
$arkhamvalue = $_POST["numArkham"];
$munchkinvalue = $_POST["numMunchkin"];
$humanityvalue = $_POST["numHumanity"];
$supremacyvalue = $_POST["numSupremacy"];
$nuclearvalue = $_POST["numNuclear"];

$totalyahtzeeprice = $yahtzeevalue * (13.99);
$totalarkhamprice = $arkhamvalue * (64.99);
$totalmunchkinprice = $munchkinvalue * (25.99);
$totalhumanityprice = $humanityvalue * (30.99);
$totalsupremacyprice = $supremacyvalue * (15.99);
$totalnuclearprice = $nuclearvalue * (22.99);

$totalitemsprice = $totalarkhamprice + $totalhumanityprice + $totalmunchkinprice + $totalnuclearprice + $totalsupremacyprice + $totalyahtzeeprice;

$shipping = $_POST["shipping"];
if($shipping == "7 day - Free") $shipping = 0;
else if($shipping == "3 day - $5.00") $shipping = 5;
else $shipping = 50;

$totalcost = $shipping + $totalitemsprice;

//css - can't get the table style to show up
echo "<style>";
echo "body{ background-color: #CCFFFF;}";
echo "h3{ color: white;";
echo "background-image: url(boardgames.jpg);";
echo "background-size: 25%;";
echo "font-family: Georgia;";
echo "font-size: 300%}";
echo "table#t1{ border-width: 3px;";
echo "width: 100%;";
echo "border-color: blue;";
echo "font-family: Georgia;";
echo "font-size: 100%;}";
echo "</style>";

//hello message, display password, print reciept
echo "<h3>Thank you ".$email." for your order!<br>Your password: ".$password."</h3>";
echo "<table id=\"t1\">";
echo "<tr>";
echo "<th>Item</th>";
echo "<th>Quantity</th>";
echo "<th>Cost per Item</th>";
echo "<th>Sub Total</th>";
echo "</tr>";

echo "<tr>";
echo "<th>Yahtzee</th>";
echo "<td>".$yahtzeevalue."</td>";
echo "<td>$13.99</td>";
echo "<td>$".$totalyahtzeeprice."</td>";
echo "</tr>";

echo "<tr>";
echo "<th>Arkham Horror</th>";
echo "<td>".$arkhamvalue."</td>";
echo "<td>$64.99</td>";
echo "<td>$".$totalarkhamprice."</td>";
echo "</tr>";

echo "<tr>";
echo "<th>Munchkin Zombies</th>";
echo "<td>".$munchkinvalue."</td>";
echo "<td>$25.99</td>";
echo "<td>$".$totalmunchkinprice."</td>";
echo "</tr>";

echo "<tr>";
echo "<th>Cards Against Humantiy</th>";
echo "<td>".$humanityvalue."</td>";
echo "<td>$30.99</td>";
echo "<td>$".$totalhumanityprice."</td>";
echo "</tr>";

echo "<tr>";
echo "<th>Supremacy</th>";
echo "<td>".$supremacyvalue."</td>";
echo "<td>$13.99</td>";
echo "<td>$".$totalsupremacyprice."</td>";
echo "</tr>";

echo "<tr>";
echo "<th>Nuclear Escalation</th>";
echo "<td>".$nuclearvalue."</td>";
echo "<td>$22.99</td>";
echo "<td>$".$totalnuclearprice."</td>";
echo "</tr>";

echo "<tr>";
echo "<th>Shipping</th>";
echo "<td>".$_POST["shipping"]."</td>";
echo "<td> </td>";
echo "<td>$".$shipping."</td>";
echo "</tr>";

echo "<tr>";
echo "<th>Total Cost</th>";
echo "<td> </td>";
echo "<td> </td>";
echo "<td>$".$totalcost."</td>";
?>


