<!doctype html>
<html>
	<body>
		<?php
		error_reporting(E_ALL); 
		ini_set("display_errors", 1); 
		echo "<table border =\"1\">";
			for ($row=1; $row <= 100; $row++) { 
				echo "<tr> \n";
				for ($col=1; $col <= 100; $col++) { 
				$p = $col * $row;
				echo "<td>$p</td> \n";
					}
					echo "</tr>";
				}
		echo "</table>";
		?>
	</body>
</html>