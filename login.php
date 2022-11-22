<?php
session_start();
$_SESSION['uname'][0]=$_POST['uname'];
$_SESSION['pass'][0]=$_POST['pass'];

echo $_SESSION['uname'][0];
?>