<?php
session_start();

$_SESSION["continent"]=$_GET["continent"];
header("location:../map.php");
?>