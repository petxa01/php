 <!DOCTYPE html>
 <html>
 <body style="background-color: lightblue">
 <h1> PHP</h1>

<div style="border-style: solid; border-color: green; width: 700px; margin: auto; padding: 20px;">
	 	<h2>line outside the for</h2>
		 <?php 
		 	for ($i=0; $i <10 ; $i++) { 
		 		echo "Inside the loop. Line ", $i, "<br>";
		 	}
		?>
	 </div>
</body>
</html>