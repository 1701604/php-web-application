<?
include "top.php";
include "coninfo.php";

$un=$_POST["un"]; //username
$pw=$_POST["pw"]; //password

$query="SELECT * FROM users WHERE username like '$un' AND password like '$pw'";
$query2 = "INSERT INTO failedlogin (usernameEntered, passwordEntered) VALUES ('$un', '$pw')";
$result=mysqli_query($link,$query);

$num=mysqli_num_rows($result);

if($num==1)//Log them in
{
	session_start();//access the session
	$_SESSION["username"]=$un;
	
	echo "Correct Credentials Entered - Welcome<br><br>";

	?>
	<form action="home.php" method="post">
		<input type="submit" value="Home">
	</form>
	<?
}
else
{
	$result = mysqli_query ($link, $query2);
	echo "Sorry Incorrect Credentials Entered, Please try again<br><br>";
	
	?>
	<form action="login.php" method="post">
		<input type="submit" value="Back">
	</form>
	<?
}

?>

