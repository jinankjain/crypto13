<?php

session_start();
require ("connect.php");

if(isset($_SESSION['MEMBER_USERNAME']))
{
	$username = $_SESSION['MEMBER_USERNAME'];
	$qry="SELECT * FROM users WHERE username='".mysql_real_escape_string($username)."'";
	if($query_run  = mysql_query($qry))
	{
		$member = mysql_fetch_array($query_run);
	}
	else
	{
		die(mysql_error());
	}
}
else
{
	header("Location: index.php");
}
	
?>
<html>
	<head>
		<title>Clue <?php echo ': '.$member['level']; ?></title>
		<meta charset="utf-8">
		
		<script type="text/javascript" src="js/jquery-10.js"></script>
		<script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>

		<style type="text/css">
		body
		{
			overflow: hidden;
			background-color: #000;
		}
		#base
		{
			position:fixed;
			top:0;
			left:0;
			background-color:black;
		}
		#base img.fade
		{
			position:absolute;
			top:0;
			display:none;
			width:100%;
			height:100%;
			z-index:-10;
		}
		</style>

			<script type="text/javascript">
				$(window).load(function(){
					var dg_H = $(window).height();
					var dg_W = $(window).width();
					$('#base').css({'height':dg_H/3,'width':dg_W/4, 'top':2*dg_H/3, 'left':3*dg_W/8});
					function appear() {
						$("#base img").first().fadeIn(4000);
					}
					appear();
				})
				$(window).resize(function(){window.location.href=window.location.href})
			</script>
			
	</head>
	<body>
		<a href="logout.php">Logout</a>
		<div id="base">
			<img class="fade" src="images/candle.gif">
		</div>	
	</body>
</html>