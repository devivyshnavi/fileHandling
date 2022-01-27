<?php
if(isset($_POST["sub"])){
    $email=$_POST["uname"];
    $name=$_POST["nam"];
    $pswd=$_POST["pass"];
    $age=$_POST["age"];
    $gend=$_POST["gen"];
    if(empty($email)){
        echo "pls enter the username";
    }
     else{
         if(is_dir("users/".$email)){
             echo "already exists";
          }
        
         else{
           mkdir("users/".$email);
        //     //touch("users/".$email."/details.txt");
           $fo=fopen("users/".$email."/details.txt","w");
            fwrite($fo, $name."\n".$pswd."\n".$age."\n".$gend."\n");
          }
        }
 }

?>


<!DOCTYPE html>
<html>
    <body>
    <form method="post">

         User Name : <input type="text" name="uname"/> <br/>
         Name : <input type="text" name="nam"/> <br/>
         Password : <input type="password" name="pass"/><br/>
        Age :<input type="text" name="age"/><br/>
         Gender 
         Male:<input type="radio" name="gen" value="male">
         FeMale:<input type="radio" name="gen" value="female">
         <br/>
         <input type="submit" value="submit" name="sub"/><br/>
        </form>
    </body>
</html>