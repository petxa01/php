<html>
<body>
	<?php
	include("test_conect_db.php");
		$link=conectDataBase(); #We are calling the function

		#get the data from the form
		$chassis_number=$_POST['chassis_number'];
		$brand=$_POST['brand'];
		$model=$_POST['model'];
		$year=$_POST['year'];
		$color=$_POST['color'];
		#insert into the database
		mysqli_query($link, "insert into cars (chassis_number,brand,model,year,color) values ('$chassis_number','$brand','$model','$year','$color') ");

		#show the result
		mysqli_close($link);

		header("Location: kontsultatu.php");

		?>
</body>
</html>
