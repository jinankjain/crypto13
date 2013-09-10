<?php 
include ("connect.php");

$username = $_POST['username'];
$password = $_POST['password'];


if(isset($username)){
$qry="SELECT * FROM users WHERE username='$username' AND password='$password' ";
}
$result  = mysql_query($qry);

    if ($result>0)
  {
            $member = mysql_fetch_array($result);
			echo $member['username'];
			echo $member['user_id'];
			
  }else
echo "1 record added";


?>