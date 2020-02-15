<head>
<title>LOGIN FORM</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body id="body_bg">
<div <div align="center">


    <form id="login-form" method="post" action="checklogin.php" >
        <table border="0.5" >
		<h2>LOGIN FORM</h2>
                Username: <input type="text" name="un"><br><br>
                Password: <input type="text" name="pw"><br><br>
                <input type="submit" value="Submit" />
                <input type="reset" value="Reset"/>
		
    </form>
			
	
<br>

<h2>REGISTER HERE</h2>

	<form action="registercheck.php" method="POST">
		Username: <input type="text" name="un"><br><br>
		Password: <input type="text" name="pw"><br><br>
		<input type="submit" value="Register"></a>
	</form>	
	</table>

		</div>
</body>
</html>
<?
include "bottom.php";
?>