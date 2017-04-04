<!DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
		<?php
		include("test_conect_db.php");
		$link=conectDataBase(); #We are calling the function
		$result=mysqli_query($link, "select * from cars;");


		 ?>
	<table border="1">
		<tr>
			<th>Chassis number</th><th>Brand</th><th>Model</th><th>Year</th><th>Color</th>
		</tr>
		<?php
			while ($erregistroa=mysqli_fetch_array($result)) {
				# code...
				printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%d</td><td>%s</td></tr>", $erregistroa["chassis_number"], $erregistroa["brand"], $erregistroa["model"], $erregistroa["year"], $erregistroa["color"]);
			}
			mysqli_free_result($result);
			mysqli_close($link);
		 ?>


	</table>

</body>
</html>
