<html>
<body>
	<?php
	include("test_conect_db.php");
		$link=conectDataBase(); #We are calling the function

		#get the data from the form
		$chassis_number=$_GET['chassis_number'];
		#insert into the database
		mysqli_query($link, "delete from cars where chassis_number='$chassis_number' ");

		#show the result
		mysqli_close($link);

		header("Location: Ezabatu.php");



	?>
</body>
</html>
