<? 
	include "top.php";
	include "coninfo.php";
	
	$un=$_POST["un"];
	$pw=$_POST["pw"];
	
	$query = "INSERT INTO users (username, password) VALUES ('$un', '$pw')";
	
	$result = mysqli_query ($link, $query);

	?>
	<div class = "row"><a>
	<?		
		echo "Thank you for signing up and welcome!";
		
		?>
		<form action="home.php" method="post">
			<input type="submit" value="Home">
		</form></a>
	</div>		