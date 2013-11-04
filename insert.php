<?php

$mysql_host = "mysql9.000webhost.com";
$mysql_database = "a2227395_db";
$mysql_user = "a2227395_admin";
$mysql_password = "1password";

mysql_connect($mysql_host,$mysql_user,$mysql_password);
@mysql_select_db($mysql_database);

$query = "INSERT INTO constraints (Location) VALUES('Hello')";
$result = mysql_query($query);
echo "$result";
mysql_close();
header("location:personal.php");
?>