<?php
error_reporting(0);
if(isset($_POST["sub"])){
    $user=$_POST["uname"];
    $pass=$_POST["pswd"];
    if(is_dir($user)){
        echo "Already exists";
    }
    else{
        mkdir($user);
       mkdir("$user/$pass");
        echo "success";
    }
}
?>


<!DOCTYPE html>
<html>
    <body>
        <form method="post">
    Email: <input type="text" name="uname"><br/><br/>
    password:<input type="password" name="pswd"><br/><br/>
    <input type="submit" value="submit" name="sub">
    </form>
    </body>
</html>