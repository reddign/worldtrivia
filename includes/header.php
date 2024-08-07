<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Trivia</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="images/worldIcon.png">
    <?PHP require "includes/globalJS.php"; ?>
</head>
<body>
<?php
//$_SESSION["coins"] = $coins;
//$_SESSION["guesses"] = $guesses;
?>

<div class="w3-top">
        <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
          <a href="start.php" class="w3-bar-item w3-button"><img src="images/Heading.png" height=50px style="border-style: none;"></a>
          <!-- Right-sided navbar links. Hide them on small screens -->
          <div class="w3-right w3-hide-small">
            <a href="store.php" class="w3-bar-item w3-button">Store</a>
            <a href="reset.php" class="w3-bar-item w3-button">Reset</a>
            <a href="map.php" class="w3-bar-item w3-button">Game</a>
            <a href="#" class="w3-bar-item w3-button">Guesses: <?PHP echo $guesses; ?></a>
            <a href="#" class="w3-bar-item w3-button">Coins: <?PHP echo $coins; ?></a>

          </div>
        </div>
      </div>