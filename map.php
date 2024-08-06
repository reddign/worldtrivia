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
            event.preventDefault();

            let guesses = 3;
let coins = 10;
let continent = ""
let x;
let win = false;

//get a random number between 1 and 7

function getNumber(){
    x = Math.floor(Math.random() * 7) + 1;
    alert(x)
}

// allocate a continent to each number

function updateCont(){
    if (x == 1){
        continent = "africa"
    }
    else if (x == 2){
        continent = "antartica"
    }
    else if (x == 3){
        continent = "asia"   
    }
    else if (x == 4){
        continent = "australia"   
    }
    else if (x == 5){
        continent = "europe"   
    }
    else if (x == 6){
        continent = "northAmerica"   
    }
    else if (x == 7){
        continent = "southAmerica"   
    }
}

            function pickContinent(){
    getNumber();
    updateCont();
    alert(continent);
}

pickContinent();

            function clickRegion(area){
    if (area == 'northAmerica' && continent == 'northAmerica'){
        alert("correct!")
        win = true
    }
    else if (area == 'southAmerica' && continent == 'southAmerica'){
        alert("correct!")
        win = true
    }
    else if (area == 'australia' && continent == 'australia'){
        alert("correct!")
        win = true
    }
    else if (area == 'antarctica' && continent == 'antarctica'){
        alert("correct!")
        win = true
    }
    else if (area == 'asia' && continent == 'asia'){
        alert("correct!")
        win = true
    }
    else if (area == 'europe' && continent == 'europe'){
        alert("correct!")
        win = true
    }
    else if (area == 'africa' && continent == 'africa'){
        alert("correct!")
        win = true
    }
    else{
        alert("incorrect!")
        win = false;
        guesses -= 1;
    }

    if (win == true && guesses == 3){
        coins += 5
    }
    else if (win == true && guesses == 2){
        coins += 3
    }
    else if (win == true && guesses == 1){
        coins += 2
    }

    alert(`guesses: ${guesses}`)
    alert(`coins: ${coins}`)

}


clickRegion(area);
        </script>
<?php
include "includes/footer.php";
?>
