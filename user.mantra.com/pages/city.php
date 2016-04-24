<?php
$id=$_GET['id'];


$servername = "localhost";
$username = "root";
$password = "";
$database="mantra";
// Create connection
mysql_connect($servername,$username,$password);

mysql_select_db($database) or die( "Unable to select database");


$query=mysql_query("SELECT * FROM `master_city` WHERE `city_state_id`='$id'");
print "<select name='city' id='city'>";
while ($v=mysql_fetch_array($query)){
print"<option value='".$v['city_id']."'>".$v['city_name']."</option>";
}

?>