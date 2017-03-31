<?php 

	function conectDataBase(){
		if(!($link = mysqli_connect("localhost","root","")))
		{
			echo "There is no conection to the DB.";
			exit();
		}
		if(!mysqli_select_db($link, "db_enterprise"))
		{
			echo "There is an error selecting the DB.";
			exit();
		}
		return $link;



	}


 ?>