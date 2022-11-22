<?php 
$hell="hell/";
$target=$hell.basename($_FILES['imageFile']['name']);

move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target);

echo $target;

?>