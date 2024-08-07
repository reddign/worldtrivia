<?php
include "includes/header.php";
?>
<br><br><br><br>


        <h1>World Trivia</h1>
       
        <script src="trivia.js"></script>

        <div style="float: left;">

        
        <img src="images/WorldMap.png" usemap="#worldMap" >
        <map name="worldMap" id="worldMap">
            <area shape="rect" coords="170, 50, 420, 240" href=# onclick="clickRegion('northAmerica')"> 
            <area shape="rect" coords="425, 20, 520, 80" href=# onclick="clickRegion('northAmerica')">
            <area shape="rect" coords="300, 240, 450, 480" href=# onclick="clickRegion('southAmerica')"> 
            <area shape="rect" coords="880, 320, 1060, 440" href=# onclick="clickRegion('australia')"> 
            <area shape="rect" coords="500, 170, 650, 270" href=# onclick="clickRegion('africa')">
            <area shape="rect" coords="580, 320, 700, 410" href=# onclick="clickRegion('africa')">
            <area shape="rect" coords="580, 270, 680, 310" href=# onclick="clickRegion('africa')">
            <area shape="rect" coords="675, 30, 950, 240" href=# onclick="clickRegion('asia')">
            <area shape="rect" coords="480, 50, 674, 150" href=# onclick="clickRegion('europe')">
            <area shape="rect" coords="170, 500, 900, 580" href=# onclick="clickRegion('antarctica')">
        </map> 
        </div>
        
        <h1 id="hintSpace">Hints</h1>
        
    </body>
</html>

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
require "includes/hintDisplay.php";
echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
include "includes/footer.php";
?>