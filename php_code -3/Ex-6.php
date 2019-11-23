
<?php
echo "<table border =\"1\" style='border-collapse: collapse'>";
	for ($row=1; $row <= 7; $row++) { 
		echo "<tr> \n";
		for ($colmn=1; $colmn <= 7; $colmn++) { 
		   $p = $colmn * $row;
		   echo "<td>$p</td> \n";
		   	}
	  	    echo "</tr>";
		}
		echo "</table>";
?>
