<?php
$strServer="localhost";   
$strDatabase="firstdatabase"; // Name for the database in phpmyadmin
$strUser="root";    
$strPwd="";    // Leave blank for WAMPServer

$link=mysqli_connect($strServer,$strUser,$strPwd,$strDatabase)or die("Could not open database");
?>