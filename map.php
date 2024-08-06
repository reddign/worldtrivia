<?php
include "includes/header.php";
?>
<br><br><br><br>


<img src="images/WorldMap.png" alt="world map" usemap="#worldmap">

<map name="worldmap" id="worldmap" >
    <area coords="130, 20, 500, 200" href="#" shape="rect" onclick="clickRegion('northAmerica');">
    <area coords="200, 200, 450, 450" href="#" shape="rect" onclick="clickRegion('southAmerica');">
    <area coords="470, 150, 650, 420" href="#" shape="rect" onclick="clickRegion('africa');">
    <area coords="670, 40, 920, 290" href="#" shape="rect" onclick="clickRegion('asia');">
    <area coords="850, 300, 990,500" href="#" shape="rect" onclick="clickRegion('australia');">
    <area coords="500, 15, 675, 150" href="#" shape="rect" onclick="clickRegion('europe');">
    <area coords="130, 500, 990, 600" href="#" shape="rect" onclick="clickRegion('antartica');">
</map>

        <script src="trivia.js"> 
        </script>
<?php
include "includes/footer.php";
?>
