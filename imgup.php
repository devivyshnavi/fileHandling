<?php
if(isset($_POST["sub"])){
    $tmp=$_FILES["att"]["tmp_name"];
    $fname=$_FILES["att"]["name"];
    $ext=pathinfo($fname,PATHINFO_EXTENSION);// get extension of file jpg,txt
    $fn="attach-".rand()."-".time()."$ext";
    if(!empty($tmp)){
        if(($ext=="jpg") || ($ext=="pdf" )|| ($ext=="jpeg")){
        
        $dest="uploadd/";
        if(move_uploaded_file($tmp,$dest.$fn)){
            echo "Uploaded succesfully";
        }
        else{
            echo "Upload error";
        }
    }
    else{
        echo "only jpgs";
    }
    }
    else{
        echo "select file";
    }
}

?>


<!DOCTYPE html>
<html>
    <head>
        <h2>Upload Here</h2>
    </head>
    <body>
        <form method="post" enctype="multipart/form-data">
        Attach :<input type="file" name="att"><br/><br/>
        <input type="submit" name="sub" value="upload">
    </form>
    </body>
</html>