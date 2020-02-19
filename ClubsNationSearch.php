<? 
include "top.php";
include "coninfo.php";
		
$fc = $_POST["f1"];

$query="SELECT * FROM footballclubs WHERE ClubsNation like ";
$query2 = "INSERT INTO logsearch (searchBar, page) VALUES ('$fc', 'footballclubs')";

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
				<img src="<?echo $r["ClubPicture"];?>" width="10%" height="80px">		
				<?
				echo "<a><h2>";
				echo $r["ClubsName"]." ";
				echo "</h2>";	
				echo "The Information: ";
				echo $r["Description"]. "<br>";	
				echo "The Nation: ";
				echo $r["ClubsNation"]. "<br>";
				echo "<br><br>";
				?>
		<?
	}
}

else 
{
	?>
		<br>
		<a>Nothing Found!!</a>
		<br>
	<?
}
$result = mysqli_query ($link, $query2);
?>
	<br>
	<form action="FootballClubs.php" method="post">
		<input type="submit" value="Go Back">
	</form>
<?