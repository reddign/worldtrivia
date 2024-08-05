<?php
include "includes/header.php";
?>
<br><br><br><br>

<script src="trivia.js"> </script>
<img src="images/WorldMap.png" alt="world map" usemap="#worldmap">
    <map name="worldMap" id="worldMap">
            <area shape="rect" coords="170, 50, 420, 240" href="index.php" onclick="clickRegion('northAmerica')" > 
            <area shape="rect" coords="425, 20, 520, 80" href="#" onclick="clickRegion('northAmerica')">
            <area shape="rect" coords="300, 240, 450, 480" href="#" onclick="clickRegion('southAmerica')"> 
            <area shape="rect" coords="880, 320, 1060, 440" href="#" onclick="clickRegion('australia')"> 
            <area shape="rect" coords="500, 170, 650, 270" href="#" onclick="clickRegion('africa')">
            <area shape="rect" coords="580, 320, 700, 410" href="#" onclick="clickRegion('africa')">
            <area shape="rect" coords="580, 270, 680, 310" href="#" onclick="clickRegion('africa')">
            <area shape="rect" coords="675, 30, 950, 240" href="#" onclick="clickRegion('asia')">
            <area shape="rect" coords="480, 50, 674, 150" href="#" onclick="clickRegion('europe')">
            <area shape="rect" coords="170, 500, 900, 500" href="#" onclick="clickRegion('antartica')">
        </map> 

<?php
include "includes/footer.php";
?>
