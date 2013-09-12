<?php
session_start();
//echo $_SESSION['MEMBER_USERNAME'];
error_reporting(0);
if(isset($_SESSION['MEMBER_USERNAME']))
{    
	if($_SESSION['MEMBER_USERNAME']=="admin")
	{
		header("location:admin.php");
	}
	else
		header("location:ques1.php");
}
else
<<<<<<< HEAD
	echo "PLEASE LOGIN";
=======
	echo "Please Login to continue.";
>>>>>>> pr/1
	
include ("connect.php");
$username = $_POST['username'];
$password = $_POST['password'];
error_reporting(0);
	
if(isset($username) && isset($password)) {
	$error = '';
	if(!empty($username) && !empty($password))
	{
		echo $query = "SELECT * FROM users WHERE username='".mysql_real_escape_string($username)."' AND password='".mysql_real_escape_string($password)."'";
		if($query_run = mysql_query($query))
		{
			$query_num_rows = mysql_num_rows($query_run);
			if($query_num_rows == 0) {
				$error = 'Invalid username and/or password!';
<<<<<<< HEAD
			} else if($query_num_rows == 1)
=======
			}
			else if($query_num_rows == 1)
>>>>>>> pr/1
			{
				$_SESSION['MEMBER_USERNAME'] = $username;
				if(isset($_SESSION['MEMBER_USERNAME']))
				{
					if($_SESSION['MEMBER_USERNAME']=="admin")
					{
						header("location:admin.php");
					}
					else
						header("location:ques1.php");
				}
			}
		} else {
			die('Error fetching data!');
		}
	}
	else {
		$error = 'Supply a username and password!';
	}
}

?>
<html>
	<head>
<<<<<<< HEAD
	<title>Crypto 13</title>
	<meta charset="utf-8">
	
	<link href="css/home_style.css" rel="stylesheet" type="text/css">
	
	<script type="text/javascript" src="js/jquery-10.js"></script>
	<script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript">
		$(window).load(function(){
			$("#userarea").hide();
			var dg_H = $(window).height();
			var dg_W = $(window).width();
			$('#base').css({'height':dg_H,'width':dg_W});
			$('#userarea').css({'height':dg_H/2.5,'width':dg_W/5,'top':1.8*dg_H/8,'left':4.2*dg_W/6});
			function appear()
			{
				$("#base img").first().fadeIn(4000);
				$("#userarea").show(3000);
			}
			appear();
		})
		$(window).resize(function(){window.location.href=window.location.href})
	</script>
=======
		<title>Crypto 13</title>
		<meta charset="utf-8">
		
		<link href="css/home_style.css" rel="stylesheet" type="text/css">
		
		<script type="text/javascript" src="js/jquery-10.js"></script>
		<script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
		<script type="text/javascript">
			$(window).load(function(){
				$("#userarea").hide();
				$("#userarea form").hide();
				var dg_H = $(window).height();
				var dg_W = $(window).width();
				$('#base').css({'height':dg_H,'width':dg_W});
				$('#userarea').css({'height':dg_H/2.5,'width':dg_W/5,'top':1.8*dg_H/8,'left':4.2*dg_W/6});
				function appear()
				{
					$("#base img").first().fadeIn(3000);
					$("#userarea").show(2000);
				}
				appear();
				setTimeout(function ()
				{
					$("#userarea form").fadeIn(2000);
				},2000);
			})
			$(window).resize(function(){window.location.href=window.location.href})
		</script>
>>>>>>> pr/1
		
	</head>
	<body>
		<div id="userarea">
			<form action="index.php" method="POST">
				<center><font color="#f00" size="+1"><?php echo $error; ?></font></center>
				<br>
				Alias: <input type="text" name="username"><br><br>
				Key: <input type="password" name="password"><br><br>
				<input class="button" type="submit" value="Solve Case" >
<<<<<<< HEAD
			</form>
			<br><br>
			<center><div style="font-size:20px;">New detectives click <a href="signup.php">here</a></div></center>
=======
				<br><br>
				<center><div style="font-size:20px;">New detectives click <a href="signup.php">here</a></div></center>
			</form>
>>>>>>> pr/1
		</div>
		<div id="base">
			<img class="fade" src="images/bg.jpg">
		</div>
<<<<<<< HEAD
		
=======
		<audio autoplay loop>
			<source src="dk.mp3" type="audio/mp3">
		</audio>
>>>>>>> pr/1
	</body>
</html>

<?php


?>