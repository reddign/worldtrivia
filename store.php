<?php
include "includes/header.php";
?>
<br><br><br><br>
<body>
    <h3>World Trivia Store</h3>
    Inventions
    <button id="inventions" onclick="inventionsHint()">2 Coins</button><br><br>
    Known For 
    <button id="knownFor" onclick="funFactHint()">2 Coins</button><br><br>
    Geography
    <button id="geography" onclick="geographyHint(3)">3 Coins</button><br><br>
    Wildlife
    <button id="uniqueWildlife" onclick="wildlifeHint(4)">4 Coins</button><br><br>
    Country 
    <button id="country" onclick="countryHint(5)">5 Coins</button><br><br>



    <?php
include "includes/footer.php";
?>