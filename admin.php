<?php session_start(); ?>
<html>
<head>
    </head>
    <body>
    <h2>This is admin side of crypto</h2>
    <form method="POST" action="admin.php">
        Enter level number = <input type="text" name="level_no"><br>
        Enter level name = <input type="text" name="level_name"><br>
        Enter solution = <input type="text" name="answer"><br>
        <input type="submit" value="submit"><br>
        <a href="logout.php">Logout</a>
    </form>
	<a href="logout.php">Logout</a>
</body>
</html>
<?php 
include 'connect.php';
if(isset($_SESSION['MEMBER_USERNAME'])&&$_SESSION['MEMBER_USERNAME']=="admin")
{    
   $level_no = @$_POST['level_no'] ;
   $level_name = @$_POST['level_name'];
   $answer = @$_POST['answer'];
   if(isset($level_no)){
    $query_for_taking_answers = "insert into answer (sno,answer,level,level_name) values ('','$answer','$level_no','$level_name')";
    $query_run = mysql_query($query_for_taking_answers);
}

}else 
header("location:index.php");
?>
