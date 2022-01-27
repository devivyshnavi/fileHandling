<?php
session_start();
$emailid=$_SESSION["mailid"];
$pass=$_SESSION["pass"];
if(empty($emailid) || empty($pass)){
    header("location:login.php");
}
?>




<!DOCTYPE html>
<html>
    <head>
        <body>
        HII <?php echo $emailid;?><br/>
        password <?php echo $pass;?><br/>
        The cookie is <?php echo $_COOKIE["email"];?>
        <a href="logout.php">Logout</a>
        </body>
    </head>
</html>