 <?php session_start(); ?>
 <html>
 <head>
 	<title>
 		Sign-Up
 	</title>
 </head>
 <body>
 <form action="signup.php" method="POST">
        Username : <input type="text" name="username"><br>
        Password : <input type="password" name="password"><br>
        Email :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="email" name="email"><br>
            <input type="submit" value="Submit" >
        </form>
    </body>
  </html>
<?php

include ("connect.php");
error_reporting(0);
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$level = 0;

if(isset($username)){
$qry="SELECT * FROM users WHERE username='$username' AND password='$password' ";
}
$result  = mysql_query($qry);
$member = mysql_fetch_array($result);

if(isset($_POST['username'])&&$member['username']== $username){
	echo 'Username already exists';
}
if(isset($username) && $member['username']!= $username){
$query_for_taking_username = "insert into users (user_id,username,password,level,email_id) values ('','$username','$password','$level','$email')";
}
$query_run  = mysql_query($query_for_taking_username);

    
?>
    