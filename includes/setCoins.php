<?php
session_start();

$_SESSION["coins"]=$_GET["coins"];

$hintName=$_GET["hint"];
if($hintName!=""){
    $_SESSION[$hintName]=true;
}

$page=$_GET["page"];
if($hintName!=""){
    header("location:../store.php");
}else{
    header("location:../map.php");
}
?>