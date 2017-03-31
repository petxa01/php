<!DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
Empployees table

		<?php
		include("test_conect_db.php");
		$link=conectDataBase(); #We are calling the function
		$result=mysqli_query($link, "select * from employees;");


		 ?>
	<table border="1">
		<tr>
			<th>Employee ID</th><th>Employee name</th>
		</tr>
		<?php
			while ($erregistroa=mysqli_fetch_array($result)) {
				# code...
				printf("
				<tr>
				<td>%s</td>
				<td>%s</td>
				</tr>"
				, $erregistroa["emp_ID"], $erregistroa["name"]);
			}
			mysqli_free_result($result);
			mysqli_close($link);
		 ?>


	</table>

</body>
</html>
