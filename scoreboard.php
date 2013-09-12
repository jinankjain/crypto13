
<html>
	<head>
		<title>Scoreboard</title>
		<style>
			.left
			{
				float:left;
			}
			.right
			{
				float:right;
			}
			.board
			{
				width: 50%;
				display:box;
			}
		</style>
	</head>
<?php 
include('connect.php');
$query_for_taking_data = "SELECT * from users";
$result = mysql_query($query_for_taking_data);
$member = mysql_fetch_array($result);
?>
<center>
<div class="board">
<?php
$i = 1;
?>
<div class="left">Detectives</div><div class="right">Level</div><br><hr>
<?php
while($member = mysql_fetch_array($result)){
	echo '<div class="left">'.$i.'. '.$member['username'].'</div>';
	echo '<div class="right">'.$member['level'].'</div>';
	echo '<br><hr>';
	$i += 1;
}
?>
</div>
</center>
</html>

