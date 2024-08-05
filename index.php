<?php
include "includes/header.php";
?>
<body>
    <header><h1>Trivia</h1></header>

    <img src="images/WorldMap.png" alt="world map" usemap="#worldmap">

<map name="worldmap" id="worldmap" >
    <area coords="130, 20, 500, 200" href="region.php?region_id=21" shape="rect">
    <area coords="200, 200, 450, 450" href="region.php?region_id=13" shape="rect">
    <area coords="470, 150, 650, 420" href="region.php?region_id=15" shape="rect">
    <area coords="670, 40, 920, 290" href="region.php?region_id=30" shape="rect">
    <area coords="850, 300, 990,500" href="region.php?region_id=9" shape="rect">
    <area coords="500, 15, 675, 150" href="region.php?region_id=151" shape="rect">
</map>

<?php
include "includes/footer.php";
?>