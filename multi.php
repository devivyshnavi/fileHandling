<?php
if (isset($_POST["sub"])) {
    $tmp = $_FILES["att"]["tmp_name"];
    $fname = $_FILES["att"]["name"];

    $index = 0;
    foreach ($tmp as $file) {
        if (!empty($tmp)) {
            $dest = "uploadd/";
            if (move_uploaded_file($file, $dest . $fname[$index])) {
                echo "Uploaded succesfully";
            } else {
                echo "Upload error";
            }
        } else {
            echo "select file";
        }
        $index++;
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
        Attach :<input type="file" name="att[]" multiple><br /><br />
        <input type="submit" name="sub" value="upload">
    </form>
</body>

</html>