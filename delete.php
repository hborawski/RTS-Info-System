<?php

$mysql_host = "mysql9.000webhost.com";
$mysql_database = "a2227395_db";
$mysql_user = "a2227395_admin";
$mysql_password = "1password";

mysql_connect($mysql_host,$mysql_user,$mysql_password);
@mysql_select_db($mysql_database);
$id = $_POST['id'];

$query = "DELETE FROM constraints WHERE P_Id='$id'";
mysql_query($query);

mysql_close();
header("location:personal.php");
?>