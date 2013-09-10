<?php session_start(); ?>
<?php 
include ("connect.php");

$username = $_POST['username'];
$password = $_POST['password'];


if(isset($username)){
$qry="SELECT * FROM users WHERE username='$username' AND password='$password' ";
}
$result  = mysql_query($qry);

    if ($result>0)
  {        $_SESSION['MEMBER_USERNAME'] = $username;
           if(isset($_SESSION['MEMBER_USERNAME']))
{
           header("location:ques1.php");
}			
  }else
echo "1 record added";


?>