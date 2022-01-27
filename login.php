<?php
error_reporting(0);

$data = [];

//define variables 
$emailErr = $passwordError =  "";
if (isset($_POST['sub'])) {

    //email validation 
    $em = $_POST['email'];
    $pass = $_POST['password'];

    if (empty($em)) {
        $emailErr = "email is required";
    } else {
       
            if (is_dir("users/".$em)) {
                $fo = fopen("users/".$em ."/details.txt", "r");
                fgets($fo);
                $checkPass = trim(fgets($fo));
                if ($pass == $checkPass) {
                    echo "login successful";
                } else {
                    echo "Enter correct email or password";
                }
            } else {
                echo "Enter correct email or password";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        email : <input type="text" name="email" value="<?php echo $em; ?>" /> <span class="error">* <?php echo $emailErr; ?></span><br />
        password : <input type="text" name="password" value="<?php echo $pass; ?>" /><span class="error">*<?php echo $passwordError; ?> </span><br />
        <input type="submit" value="Add" name="sub" /><br /><br />
    </form>
</body>

</html>