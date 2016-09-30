 <?php
 //IF YOUR PHP SCRIPT DISPLAYS NO OUTPUT, LOOK FOR SYNTAX ERRORS
 error_reporting(E_ALL);
 ini_set("display_errors", 1);
 
 echo "<table style=\"width:100%\">";
 
 for($i = 0; $i <= 100; $i++)
 {
    echo "<tr>";
    for($j = 0; $j <= 100; $j++)
    {
        if($i == 0)
        {
            if($j == 0) echo "<td>   </td>";
            else echo "<td>".$j."</td> ";
        }
        else
        {
            if($j == 0) echo "<td>".$i."</td>";
            else echo "<td>".($i*$j)."</td>";
        }
    }
    echo "</tr>";
 }
 echo "</table>";
 ?>
