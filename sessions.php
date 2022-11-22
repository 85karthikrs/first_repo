<?php 
session_start();

$_SESSION['hello']="Hello";
echo $_SESSION['hello'];

$_SESSION['hello']=$_POST['name'];
echo $_SESSION['hello'];

$cookie_name="hell";
$cookie_value="Hello World";
setcookie($cookie_name,$cookie_value,time()+(86400*30));

echo $_COOKIE[$cookie_name];
?>

<form method="post">
    <input type="text" name="name">
    <input type="submit">
</form>