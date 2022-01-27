<!DOCTYPE html>
<html>
    <body>
        <h2>Images</h2>
<?php
$sc=scandir("gallery");
foreach($sc as $c){
    if($c!="." && $c!=".."){
        echo "<img src='gallery/$c' width=300 height=300>";
    }
}

?>
</body>
</html>