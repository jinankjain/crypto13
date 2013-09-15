<?php

session_start();
include ("connect.php");
//error_reporting(0);
$username = $_POST['username'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$email = $_POST['email'];
$level = 0;
$error = '<br>';
if(isset($username))
{
	$qry="SELECT * FROM users WHERE username='".mysql_real_escape_string($username)."'";
}
$result  = mysql_query($qry);
if(mysql_num_rows($result)==1)
{
	$error = '<font color="red" size="+1">Sorry, Alias already exists!</font><br>';
}
if(isset($username) && isset($password) && isset($cpassword) && isset($email) && mysql_num_rows($result)==0)
{
	if(!empty($username) && !empty($password) && !empty($cpassword) && !empty($email))
	{
		if($password == $cpassword)
		{
			$query_for_taking_username = "insert into users (user_id,username,password,level,email_id) values ('','".mysql_real_escape_string($username)."','".mysql_real_escape_string($password)."','$level','$email')";
			if($query_run  = mysql_query($query_for_taking_username))
			{
				$error = '<font color="#14d30a" size="+1">Detective successfully registered.</font><br>';
			}
			else
			{
				die(mysql_error());
				$error = '<font color="red" size="+1">An error occurred. Try again!</font><br>';
			}
		}
		else
			$error = '<font color="red" size="+1">Keys don\'t match! Try again.</font><br>';
	}
	else
		$error = '<font color="red" size="+1">All fields must be validated!</font><br>';
}

?>
<html>
	<head>
		<title>New Detective</title>
		
		<link href="css/home_style.css" rel="stylesheet" type="text/css">
		
		<script type="text/javascript" src="js/jquery-10.js"></script>
		<script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
		<script type="text/javascript">
			$(window).load(function()
			{
				var dg_H = $(window).height();
				var dg_W = $(window).width();
				$('#base').css({'height':dg_H,'width':dg_W});
				$('#signup').css({'height':dg_H/2,'width':dg_W/3.4,'top':0.8*dg_H/4,'left':12*dg_W/34});
			})
			//$(window).resize(function(){window.location.href=window.location.href})
		</script>
	</head>
	<body>
		<div id="base">
			<img class="fade" src="images/bgraw.jpg">
		</div>
		<div id="signup">
			<form action="signup.php" method="POST">
				<center><?php echo $error; ?></center><br>
				Username (alias): <input type="text" name="username" value="<?php if(isset($username)) echo $username; ?>" placeholder="username here"><br><br>
				Password (key): <input type="password" name="password" placeholder="password here"><br><br>
				Confirm key: <input type="password" name="cpassword" placeholder="password again"><br><br>
				Email: <input type="email" name="email" value="<?php if(isset($email)) echo $email; ?>" placeholder="email_id here"><br><br>
				<input class="button" type="submit" value="Register Me">
			</form>
		</div>
	</body>
</html>
<?php

if($error == '<font color="#14d30a" size="+1">Detective successfully registered.</font><br>')
{
	sleep(2);
	header('Location: index.php');
}

?>