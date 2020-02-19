<?php
include "top.php";
?>

<center> <h1>Home Page</h1> </center> 

<center>
  <a class="active" href="home.php"method="post">
		<input type="submit" value="Home"></a>
		
  <a href="StarPlayers.php" method="post">
		<input type="submit" value="Star Players"></a>
		
  <a href="FootballClubs.php" method="post">
		<input type="submit" value="Football Clubs"></a>
		
  <a href="FootballPlayers.php" method="post">
		<input type="submit" value="Football Players"></a>
		
  <a href="login.php" method="post">
		<input type="submit" value="Back to Login"></a>
</center>
	
	<br><br><center><img src="football.png" width="300" height="200"><br><br></center>
	
	<?php
    echo "<p><center>This is a PHP Web Application dedicated to Football!<br><br> This application contains the best footballers and the best football clubs in the world!!!<br><br> This application maninly functions from the mySQL database that was setup using phpmyadmin. 
					 </center></p>"
?>
<?
include "bottom.php";
?>