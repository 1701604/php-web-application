<?php
include "top.php";
include "coninfo.php";
?>
<center> <h1>Football Players</h1> </center> 

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

<?
$query="SELECT * FROM footballplayers";

$result=mysqli_query($link,$query);
$numrows=mysqli_num_rows($result);

?>		
			<form action="PlayersNationSearch.php" method="post">
				<a>Searh for a Group of Players through their Nation search:<br>
				<input type="radio" name="f1" value="W"> Wales<br>
				<input type="radio" name="f1" value="E"> England<br>
				<input type="radio" name="f1" value="S"> Spain<br>
				<input type="radio" name="f1" value="F"> France<br>
				<input type="submit" value="Submit">
			</form></a>	
		
			<form action="PlayersNameSearch.php" method="post">
				<a>Search a Players Name for more info on them:<br>
				<input type="text" value="Search" name="f1">
				<input type="submit" value="Submit"></a>
			</form>
<br>
<?

if($numrows>0)
{
	while($r=mysqli_fetch_array($result))
	{
		?>	
				<img src="<?echo $r["PlayerPicture"];?>" width="10%" height="80px">		
				<?
				echo "<a><h2>";
				echo $r["PlayersName"]." ";
				echo "</h2>";									
				?>
		<br>
		<?
	}
}
else 
{
	echo"Nothing Found";
}
	
?>
<?
include "bottom.php";
?>