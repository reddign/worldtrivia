<?php
include "includes/header.php";
?>
<br><br><br><br>


    <script src="trivia.js"></script>
    <h3>World Trivia Store</h3>
    Inventions
    <button id="inventions" onclick="inventionsHint()" <?PHP if($hintInv) echo "disabled"; ?>    >2 Coins</button><br><br>
    Known For 
    <button id="funFact" onclick="funFactHint()"   <?PHP if($hintFF) echo "disabled"; ?>  >2 Coins</button><br><br>
    Geography
    <button id="geography" onclick="geographyHint()" <?PHP if($hintGeo) echo "disabled"; ?>   >3 Coins</button><br><br>
    Wildlife
    <button id="uniqueWildlife" onclick="wildlifeHint()" <?PHP if($hintWildlife) echo "disabled"; ?>  >4 Coins</button><br><br>
    Country 
    <button id="country" onclick="countryHint()" <?PHP if($hintCountry) echo "disabled"; ?>  >5 Coins</button><br><br>
</body>
</html>
