<html>
<body>
	<?php 
	include("test_conect_db.php");
		$link=conectDataBase(); #We are calling the function

		#get the data from the form
		$id=$_POST['id'];
		$name=$_POST['name'];
		#insert into the database
		mysqli_query($link, "insert into employees (emp_ID,name) values ('$id','$name') ");

		#show the result
		mysqli_close($link);

		header("Location: queryDB.php");


	?>
</body>
</html> 