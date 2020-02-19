<?php
include "top.php";
?>
<center> <h1>Star Players</h1> </center> 

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
	
	<br><br><center><img src="starfootball.png" width="300" height="200"><br><br></center><br>
	
		
    <center> <h3> This Section Highlights The 3 Star Players Of The Month </h3> </center><br>

			<?
			require_once 'Star.php';
			use \StarPlayers\Star;
			//Instantiate the Star Player
			$star = new Star("Daniel James", 22, "Manchester United");
			echo "Stars name is {$star->GetName()}<br/>";
			echo "Stars age is {$star->GetAge()}<br/>";
			echo "Stars club is {$star->GetClub()}<br/>";
			?>
			<img src="danjames.png" width="200" height="100"><br>
			<?php
			$star = new Star("Gareth Bale", 30, "Real Madrid");
			echo "Stars name is {$star->GetName()}<br/>";
			echo "Stars age is {$star->GetAge()}<br/>";
			echo "Stars club is {$star->GetClub()}<br/>";
			?>
			<img src="bale.png" width="200" height="100"><br>
			<?php
			$star = new Star("Aaron Ramsey", 29, "Juventus");
			echo "Stars name is {$star->GetName()}<br/>";
			echo "Stars age is {$star->GetAge()}<br/>";
			echo "Stars club is {$star->GetClub()}<br/>";
			?>
			<img src="ramsey.png" width="200" height="100"><br>
<?
include "bottom.php";
?>

