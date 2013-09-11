<?php session_start();

if(isset($_SESSION['MEMBER_USERNAME']))
{    
     echo "gfdgssdfdsg";
}else 
header("location:index.php");

?>
<a href="logout.php">Logout</a>