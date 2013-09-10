<?php 
session_start();
//echo $_SESSION['MEMBER_USERNAME'];
if(isset($_SESSION['MEMBER_USERNAME']))
{
           header("location:ques1.php");
}           
?>
<html>
<head>
    <title>
        Zodiac
    </title>
</head>
    <body>
        <form action="success.php" method="POST">
        Username : <input type="text" name="username"><br>
        Password : <input type="password" name="password"><br>
            <input type="submit" value="Submit" >
        </form>
        <button><a href="signup.php">Sign up</a></button>
     </body>
</html>