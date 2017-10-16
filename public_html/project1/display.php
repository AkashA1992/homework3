<?php
ini_set('display_errors', 'On');

$target_dir = "/afs/cad/u/a/r/ara59/public_html/project1/uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
print_r(basename($_FILES["fileToUpload"]["name"]));
print_r($target_dir);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {        
        header('Location: https://web.njit.edu/~ara59/project1/openFile.php?filename='.$target_file);
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>