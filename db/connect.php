<?php

$username = "root";
$password = "";
$db = "setwemudadb";
$hostname = "localhost";

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password, $db)
        or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";
?>