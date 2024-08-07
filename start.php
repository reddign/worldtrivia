<?php
include "includes/header.php";
?>

<style>
    /* a:hover{
                background-color: lightblue;
                width: 100px;
            } */

a {
  position: relative;
  text-decoration: none;
}

a::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 0;
  height: 100%;
  background-color: green;
   transition: width 0.3s ease-out;
  z-index: -1;
} 

 a:hover::before {
  width: 100%;
} 

</style>

<br><br><br><br><br><br>

<img src="images/earth.png" alt="earth" width="400px">

<br><br><br>

<a href="map.php" >
    <img id="start" src="images/startbutton.png" alt="start" style="border-style: none;" width="200px">
</a>
 

<br><br><br><br><br><br><br>
<?php
include "includes/footer.php";
?>