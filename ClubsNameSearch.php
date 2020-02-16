<? 
include "top.php";
include "coninfo.php";
		
$fc = $_POST["f1"];

$query="SELECT * FROM footballclubs WHERE ClubsName like '$fc%'";
$query2 = "INSERT INTO logsearch (searchBar, page) VALUES ('$fc', 'footballclubs')";

$result=mysqli_query($link,$query);
$numrows=mysqli_num_rows($result);

if($numrows>0)
{
	while($r=mysqli_fetch_array($result))
	{
		?>	
		<div class="row">
			<div class="column left">
				<img src="<?echo $r["ClubPicture"];?>" width="10%" height="80px">
			</div>
			<div class="column right">		
				<?
				echo "<a><h2>";
				echo $r["ClubsName"]." ";
				echo "</h2>";	
				echo "<a><b>About</b><br>";
				echo $r["Description"]." ";	
				echo "<br><br>";
				echo "<b>Nation: </b>";
				echo $r["ClubsNation"]." ";
				echo "<br><br>";
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
$result = mysqli_query ($link, $query2);
?>
	<br>
	<form action="FootballClubs.php" method="post">
		<input type="submit" value="Go Back">
	</form>
<?