<?php session_start(); ?>
<?php 
include ("connect.php");
if(isset($_POST['username'])&&isset($_POST['password'])){
$username = $_POST['username'];
$password = $_POST['password'];
}
error_reporting(0);
if(isset($username)&&$username!=null){
$qry="SELECT * FROM users WHERE username='$username' AND password='$password' ";
}
$result  = mysql_query($qry);

    if ($result>0)
  {       
       $_SESSION['MEMBER_USERNAME'] = $username;
       //echo $_SESSION['MEMBER_USERNAME'];
           if(isset($_SESSION['MEMBER_USERNAME']))
              {    if($_SESSION['MEMBER_USERNAME']=="admin"){
                       header("location:admin.php");
                   }else
                   header("location:ques1.php");
              }			
  }else
echo "Your username or password is invalid";


?>
