<? 
include "top.php";
include "coninfo.php";
		
$fc = $_POST["f1"];

$query="SELECT * FROM footballplayers WHERE PlayersNation like ";

if($fc == 'W')
{
	$query.="'Wales'";
}
if($fc == 'E')
{
	$query.="'England'";
}
if($fc == 'S')
{
	$query.="'Spain'";
}
if($fc == 'F')
{
	$query.="'France'";
}

$result=mysqli_query($link,$query);
$numrows=mysqli_num_rows($result);

if($numrows>0)
{
	while($r=mysqli_fetch_array($result))
	{
		?>	
		<div class="row">
			<div class="column left">
				<img src="<?echo $r["PlayerPicture"];?>" width="10%" height="80px">
			</div>
			<div class="column right">		
				<?
				echo "<a><h2>";
				echo $r["PlayersName"]." ";
				echo "</h2>";	
				echo "<a><b>Info</b><br>";
				echo $r["Description"]." ";	
				echo "<br><br>";
				echo "<b>Nation: </b>";
				echo $r["PlayersNation"]." ";
				echo "<br><br><b>Club: </b>";
				echo $r["PlayersClub"]." ";
				echo "</a><br>";	
				?>
			</div>
		</div>
		<br>
		<?
	}
}
else 
{
	?>
	<div class="row">
		<br>
		<a>Nothing Found!!</a>
		<br>
	</div>
	<?
}
	
?>
	<br>
	<form action="FootballPlayers.php" method="post">
		<input type="submit" value="Go Back">
	</form>
<?	