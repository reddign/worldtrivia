<?php
session_start();
if(!isset($_SESSION["coins"])||$_SESSION["coins"]==""){
    $_SESSION["coins"]=10;
    $coins = $_SESSION["coins"];
    $_SESSION["guesses"]=3;
    $guesses = $_SESSION["guesses"];
    $_SESSION["continent"]="";
    $continent = $_SESSION["continent"];
    $_SESSION["hintInv"]="";
    $hintInv = $_SESSION["hintInv"];
    $_SESSION["hintFF"]="";
    $hintFF = $_SESSION["hintFF"];
    $_SESSION["hintGeo"]="";
    $hintGeo = $_SESSION["hintGeo"];
    $_SESSION["hintWildlife"]="";
    $hintWildlife = $_SESSION["hintWildlife"];
    $_SESSION["hintCountry"]="";
    $hintCountry = $_SESSION["hintCountry"];


    
}else{
    $coins = $_SESSION["coins"];
    $guesses = $_SESSION["guesses"];
    $continent = $_SESSION["continent"];
    $hintInv = $_SESSION["hintInv"];
    $hintFF = $_SESSION["hintFF"];
    $hintGeo = $_SESSION["hintGeo"];
    $hintWildlife = $_SESSION["hintWildlife"];
    $hintCountry = $_SESSION["hintCountry"];
}



?>

<script>
let guesses = <?php echo $guesses; ?>;
let coins = <?PHP echo $coins; ?>;
let continent = "<?PHP echo $continent; ?>";
let x;
let win = false;
//let area;
</script>