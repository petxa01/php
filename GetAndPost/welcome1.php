<html>
<body>
	<?php if ($_POST["password"]==null){    
		echo "Pasword cant be empty   "; 
		echo "<a href='form_simple1.php'>Return to the menu</a>";
	}elseif ($_POST["password"]==$_POST["name"]) {
		echo "Pasword cant be the same as the name     <a href='form_simple1.php'>Return to the menu</a>";
	}else{
		echo "You are '",$_POST["name"], " ",$_POST["surname"], " ' and your pasword is '", $_POST["password"];
		echo "'      <a href='form_simple1.php'>Return to the menu</a>";

	}?>
</body>
</html> 