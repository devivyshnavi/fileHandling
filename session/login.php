<?php

if(isset($_POST["sub"])){
    $email=$_POST["mail"];
    $pswd=$_POST["pass"];
    if(!empty($email) && !empty($pswd)){
        session_start();
        $_SESSION["mailid"]=$email;
        $_SESSION["pass"]=$pswd;
        setcookie("email", $email,time()+3600);
        header("location:action.php");
    }
}
?>



<!DOCTYPE html>
<html>
    <head>
        <body>
        <form method="post">
            Email:<input type="email" name="mail"><br/><br/>
            password:<input type="password" name="pass"><br/><br/>
            <input type="submit" value="submit" name="sub">
        </form>
        </body>
    </head>
</html>