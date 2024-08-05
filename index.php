<?php
include "includes/header.php";
?>

<script src="trivia.js">

<br><br><br><br>

<img src="images/WorldMap.png" alt="world map" usemap="#worldmap">
    <map name="worldmap" id="worldmap" >
        <area coords="130, 20, 500, 200" href="#" shape="rect" onclick="clickRegion('northAmerica')">
        <area coords="200, 200, 450, 450" href="#" shape="rect" onclick="clickRegion('southAmerica')">
        <area coords="470, 150, 650, 420" href="#" shape="rect" onclick="clickRegion('southAmerica')">
        <area coords="670, 40, 920, 290" href="#" shape="rect" onclick="clickRegion('southAmerica')">
        <area coords="850, 300, 990,500" href="#" shape="rect" onclick="clickRegion('southAmerica')">
        <area coords="500, 15, 675, 150" href="#" shape="rect" onclick="clickRegion('southAmerica')">
    </map>

<?php
include "includes/footer.php";
?>