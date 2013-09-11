<?php 
include('connect.php');
$query_for_taking_data = "select * from users";
$result = mysql_query($query_for_taking_data);
$member = mysql_fetch_array($result);
while($member = mysql_fetch_array($result)){
	echo $member['username'];
	echo "&nbsp;&nbsp;&nbsp;";
	echo $member['level'];
	echo "<br>";
}
?>