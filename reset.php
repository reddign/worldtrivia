<?php
session_start();

$_SESSION["coins"]="";
$_SESSION["guesses"]="";
$_SESSION["continent"]="";
session_destroy();
header("location:index.php");

?>