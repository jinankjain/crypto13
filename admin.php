<?php session_start();
include 'connect.php';
if(isset($_SESSION['MEMBER_USERNAME'])&&$_SESSION['MEMBER_USERNAME']=="admin")
{    
    ?>
    <h2>This is admin side of crypto</h2>
    <form method="POST" action="admin.php">
    	Enter level number = <input type="text" name="level_no">
    	Enter level name = <input type="text" name="level_name">
        Enter solution = <input type="text" name="answer">
        <input type="submit" value="submit">
    </form>
    <?php
    $_POST['level_no'] = $level_no;
    $_POST['level_name'] = $level_name;
    $_POST['answer'] = $answer;
    $query_for_taking_username = "insert into answer (sno,answer,level,level_name) values ('','$answer','$level_no','$level_name')";
    $query_run = mysql_query($query_for_taking_username);
}else 
header("location:index.php");
?>
