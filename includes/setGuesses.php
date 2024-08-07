<?php
session_start();

$_SESSION["guesses"]=$_GET["guesses"];


header("location:../map.php");

?>