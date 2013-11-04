<?php
echo"
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width\" />
        <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"css/bootstrap-responsive.css\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"css/css.css\" rel=\"stylesheet\" type=\"text/css\">
        <title>RTS Info System</title>
</head>
<body>
<div class=\"navbar navbar-inverse\">
  <div class=\"navbar-inner\">
    <a class=\"brand\" href=\"index.html\">Home</a>
    <ul class=\"nav\" style=\"float:right;\">
      <li><a href=\"search.html\">Search</a></li>
    </ul>
  </div>
</div>";
session_start();
if(isset($_POST)){
  $_SESSION['constrained']=1;
}

$mysql_host = "mysql9.000webhost.com";
$mysql_database = "a2227395_db";
$mysql_user = "a2227395_admin";
$mysql_password = "1password";

mysql_connect($mysql_host,$mysql_user,$mysql_password);
@mysql_select_db($mysql_database);

$query = "SELECT * FROM constraints";
$result = mysql_query($query);

if(mysql_num_rows($result)>0){
  echo " <ul class='nav nav-tabs nav-stacked'>";
  for($i=0; $i < mysql_num_rows($result);$i++){
    $id = mysql_result($result, $i,"P_Id");
    echo "<form action=\"delete.php\" method=\"post\"><li><a>Constraint $i</a><input type=\"hidden\" name=\"id\" value=\"$id\"><input style=\"float:right\" class=\"btn btn-primary btn-small\" type=\"submit\"  value=\"Delete\">
      </li></form>";
  }
}
echo "</ul><br>";

mysql_close();
echo "
<button class=\"btn btn-primary\" onclick=\"window.location.href='constraint.html'\">Add Constraint</button>
<br>
<img src=\"schedule.png\">
</body>";
?>