 <!DOCTYPE html>
 <html>
 <body style="background-color: lightblue">
 <h1> PHP</h1>

<div style="border-style: solid; border-color: green; width: 700px; margin: auto; padding: 20px;">
	 	<h2>this is the multiply table of 7</h2>
		 <?php 
		 	for ($i=1; $i <=100 ; $i++) { 
		 		if ($i%2==0){
		 			echo "7 x", $i, "= ", 7*$i, "<br>";
		 		}
		 		
		 	}
		?>
	 </div>
</body>
</html>