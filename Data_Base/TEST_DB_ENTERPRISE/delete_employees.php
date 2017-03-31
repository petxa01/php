<html>
<body>
	<?php
	include("test_conect_db.php");
		$link=conectDataBase(); #We are calling the function

		#get the data from the form
		$id=$_GET['id'];
		#insert into the database
		mysqli_query($link, "delete from employees where emp_ID='$id' ");

		#show the result
		mysqli_close($link);

		header("Location: queryDB.php");


	?>
</body>
</html>
