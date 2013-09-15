<?php

include('connect.php');
session_start();
$query_for_taking_data = "SELECT * from users";
$result = mysql_query($query_for_taking_data);
$member = mysql_fetch_array($result);
if(isset($_SESSION['MEMBER_USERNAME']))
{
?>
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
				padding: 20px;
				border: 2px solid #555;
			}
		</style>
	</head>
	<center>
		<div class="board">
			<?php
				$i = 1;
			?>
			<div class="left" style="font-weight:bold;">Detectives</div><div class="right" style="font-weight:bold;">Level</div><br><hr style="height:2px; background-color:#666;">
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
<?php

}
else
{
	header("location:index.php");
}
?>