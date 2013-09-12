<?php

session_start();
include ("connect.php");
error_reporting(0);
$username = $_POST['username'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$email = $_POST['email'];
$level = 0;
$error = '<br>';
if(isset($username))
{
<<<<<<< HEAD
  $qry="SELECT * FROM users WHERE username='$username'";
=======
	$qry="SELECT * FROM users WHERE username='$username'";
>>>>>>> pr/1
}
$result  = mysql_query($qry);
$member = mysql_fetch_array($result);
if(mysql_num_rows($result)==1)
{
<<<<<<< HEAD
  $error = 'Sorry, Alias already exists!<br>';
}
if(isset($username) && isset($password) && isset($cpassword) && isset($email) && mysql_num_rows($result)==0)
{
  if(!empty($username) && !empty($password) && !empty($cpassword) && !empty($email))
  {
    $query_for_taking_username = "insert into users (user_id,username,password,level,email_id) values ('','".mysql_real_escape_string($username)."','".mysql_real_escape_string($password)."','$level','$email')";
    if($query_run  = mysql_query($query_for_taking_username))
    {
      $error = 'Detective successfully registered.<br>';
    }
    else
    {
      $error = 'An error occurred. Try again!<br>';
    }
  }
  else
    $error = 'All fields must be validated!<br>';
=======
	$error = 'Sorry, Alias already exists!<br>';
}
if(isset($username) && isset($password) && isset($cpassword) && isset($email) && mysql_num_rows($result)==0)
{
	if(!empty($username) && !empty($password) && !empty($cpassword) && !empty($email))
	{
		$query_for_taking_username = "insert into users (user_id,username,password,level,email_id) values ('','".mysql_real_escape_string($username)."','".mysql_real_escape_string($password)."','$level','$email')";
		if($query_run  = mysql_query($query_for_taking_username))
		{
			$error = 'Detective successfully registered.<br>';
		}
		else
		{
			$error = 'An error occurred. Try again!<br>';
		}
	}
	else
		$error = 'All fields must be validated!<br>';
>>>>>>> pr/1
}

?>
<html>
<<<<<<< HEAD
  <head>
    <title>New Detective</title>
    <style>
      input
      {
        float: right;
      }
      input:focus
      {
        outline:0;
        box-shadow: 0 0 10px 1px #fff;
      }
      .button
      {
        background-color:#cdb408;
        text-indent:0px;
        display:inline-block;
        color:#000;
        font-family:Verdana;
        font-size:15px;
        font-weight:bold;
        height:35px;
        text-align:center;
        border:0px;
      }
      .button:hover
      {
        background-color:#8cb82b;
      }
      .button:active
      {
        position:relative;
        top:1px;
      }
      body
      {
        overflow: hidden;
        background-color: #000;
      }
      form
      {
        color:#fff;
        font-size: 20;
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
      #userarea
      {
        padding:20px;
        background-color: #000;
        display: box;
        opacity: 1;
        box-shadow: 0 0 20px 20px #000;
        position:fixed;
        top:0;
        color:#fff;
        z-index:1;
      }

    </style>
    
    <script type="text/javascript" src="js/jquery-10.js"></script>
    <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript">
      $(window).load(function()
      {
        $("#userarea form").hide();
        var dg_H = $(window).height();
        var dg_W = $(window).width();
        $('#base').css({'height':dg_H,'width':dg_W});
        $('#userarea').css({'height':dg_H/2.5,'width':dg_W/4,'top':3*dg_H/10-20,'left':3*dg_W/8});
        function appear()
        {
          $("#base img").first().fadeIn(2000);
        }
        appear();
        setTimeout(function ()
        {
          $("#userarea form").fadeIn(2000);
        },1000);
      })
      $(window).resize(function(){window.location.href=window.location.href})
    </script>
  </head>
  <body>
    <div id="base">
      <img class="fade" src="images/bgraw.jpg">
    </div>
    <div id="userarea">
      <form action="signup.php" method="POST">
        <center><font color="red" size="+1"><?php echo $error; ?></font></center><br>
        Username (alias): <input type="text" name="username"><br><br>
        Password (key): <input type="password" name="password"><br><br>
        Confirm password: <input type="password" name="cpassword"><br><br>
        Email: <input type="email" name="email"><br><br>
        <input class="button" type="submit" value="Submit" >
      </form>
    </div>
  </body>
=======
	<head>
		<title>New Detective</title>
		<style>
			input
			{
				float: right;
			}
			input:focus
			{
				outline:0;
				box-shadow: 0 0 10px 1px #fff;
			}
			.button
			{
				background-color:#cdb408;
				text-indent:0px;
				display:inline-block;
				color:#000;
				font-family:Verdana;
				font-size:15px;
				font-weight:bold;
				height:35px;
				text-align:center;
				border:0px;
			}
			.button:hover
			{
				background-color:#8cb82b;
			}
			.button:active
			{
				position:relative;
				top:1px;
			}
			body
			{
				overflow: hidden;
				background-color: #000;
			}
			form
			{
				color:#fff;
				font-size: 20;
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
			#userarea
			{
				padding:20px;
				background-color: #000;
				display: box;
				opacity: 1;
				box-shadow: 0 0 20px 20px #000;
				position:fixed;
				top:0;
				color:#fff;
				z-index:1;
			}

		</style>
		
		<script type="text/javascript" src="js/jquery-10.js"></script>
		<script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
		<script type="text/javascript">
			$(window).load(function()
			{
				$("#userarea form").hide();
				var dg_H = $(window).height();
				var dg_W = $(window).width();
				$('#base').css({'height':dg_H,'width':dg_W});
				$('#userarea').css({'height':dg_H/2.5,'width':dg_W/4,'top':3*dg_H/10-20,'left':3*dg_W/8});
				function appear()
				{
					$("#base img").first().fadeIn(2000);
				}
				appear();
				setTimeout(function ()
				{
					$("#userarea form").fadeIn(2000);
				},1000);
			})
			$(window).resize(function(){window.location.href=window.location.href})
		</script>
	</head>
	<body>
		<div id="base">
			<img class="fade" src="images/bgraw.jpg">
		</div>
		<div id="userarea">
			<form action="signup.php" method="POST">
				<center><font color="red" size="+1"><?php echo $error; ?></font></center><br>
				Username (alias): <input type="text" name="username"><br><br>
				Password (key): <input type="password" name="password"><br><br>
				Confirm password: <input type="password" name="cpassword"><br><br>
				Email: <input type="email" name="email"><br><br>
				<input class="button" type="submit" value="Submit" >
			</form>
		</div>
	</body>
>>>>>>> pr/1
</html>