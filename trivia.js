let guesses = 3;
let coins = 10;
let continent = "";
let x;
let win = false;

//hints 

let naInvention = "Chocolate chip cookies were invented here.";
let saInvention = "The ballpoint pen was invented in this region.";
let eurInvention = "Plastic bags were first created in this region.";
let asiaInvention = "Gunpowder was invented in this continent."; 
let afrInvention = "Boats were first invented here.";
let antInvention = "Significant discoveries about microbes in extreme weather have been made here.";
let ausInvention = "The word 'selfie' was invented here.";

let naFF = "Potatoes originated here.";
let saFF = "This continent has two landlocked countries.";
let eurFF= "This continent is home to the smallest country in the world.";
let asiaFF = "Internet personality Bella Poarch was born in this region.";
let afrFF = "This continent is home to over 3,000 ethnic groups.";
let antFF = "This continent was the last to be colonized.";
let ausFF = "In this region, you'll find the world's longest fence.";

let naGeo = "This region receives the most tornadoes.";
let saGeo = "You will find the longest mountain range in this region.";
let eurGeo = "The smallest sea in the world is located on this continent.";
let asiaGeo = "The tallest mountain is located on this continent.";
let afrGeo = "This continent is home to the deepest river in the world."
let antGeo = "This continent is the windiest of all the continents."
let ausGeo = "This continent has roughly 30,000 kilometers of beaches."

let naWildlife = "A unique animal from this region is the Axolotl."
let saWildlife = "A unique animal from this region is the Pink Dolphin."
let eurWildlife = "A unique animal from this region is the Iberian Lynx."
let asiaWilflife = "A unique animal from this region is the Orangutan."
let afrWildlife = "A unique animal from this region is the Bat-eared fox."
let antWildlife = "A unique animal from this region is the Weddell Seal."
let ausWildlife = "A unique animal from this region is the Cassowary."

let naCountry = "A random country in this region is Saint Pierre and Miquelon"
let saCountry = "A random country in this region is Suriname"
let eurCountry = "A random country in this region is Kosovo"
let asiaCountry = "A random country in this region is Timor-Leste."
let afrCountry = "A random country in this region is Lesotho"
let antCountry = "7 countries have territorial claim on this continent."
let ausCountry = "A random country in this region is Kiribati"

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

//do it all in one function :)

function pickContinent(){
    getNumber();
    updateCont();
    alert(continent);
}

pickContinent();

//connect clickable regions to if statements

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


//function to give hint & take away appropriate amount of coins 

function inventionsHint(){
    if (coins > 1){
        coins -= 2 
        console.log(`coins: ${coins}`);
        if (continent == "northAmerica"){
            console.log(naInvention)
        }
        else if (continent == "southAmerica"){
            console.log(saInvention)
        }
        else if (continent == "europe"){
            console.log(eurInvention)
        }
        else if (continent == "asia"){
            console.log(asiaInvention)
        }
        else if (continent == "africa"){
            console.log(afrInvention)
        }
        else if (continent == "australia"){
            console.log(ausInvention)
        }
        else if (continent == "antarctica"){
            console.log(antInvention)
        }
    }
}

function funFactHint(){
    if (coins > 1){
        coins -= 2 
        console.log(`coins: ${coins}`);
        if (continent == "northAmerica"){
            console.log(naFF)
        }
        else if (continent == "southAmerica"){
            console.log(saFF)
        }
        else if (continent == "europe"){
            console.log(eurFF)
        }
        else if (continent == "asia"){
            console.log(asiaFF)
        }
        else if (continent == "africa"){
            console.log(afrFF)
        }
        else if (continent == "australia"){
            console.log(ausFF)
        }
        else if (continent == "antarctica"){
            console.log(antFF)
        }
    }
}

function geographyHint(){
    if (coins > 2){
        coins -= 3 
        console.log(`coins: ${coins}`);
        if (continent == "northAmerica"){
            console.log(naGeo)
        }
        else if (continent == "southAmerica"){
            console.log(saGeo)
        }
        else if (continent == "europe"){
            console.log(eurGeo)
        }
        else if (continent == "asia"){
            console.log(asiaGeo)
        }
        else if (continent == "africa"){
            console.log(afrGeo)
        }
        else if (continent == "australia"){
            console.log(ausGeo)
        }
        else if (continent == "antarctica"){
            console.log(antGeo)
        }
    }
}

function wildlifeHint(){
    if (coins > 3){
        coins -= 4 
        console.log(`coins: ${coins}`);
        if (continent == "northAmerica"){
            console.log(naWildlife)
        }
        else if (continent == "southAmerica"){
            console.log(saWildlife)
        }
        else if (continent == "europe"){
            console.log(eurWildlife)
        }
        else if (continent == "asia"){
            console.log(asiaWildlife)
        }
        else if (continent == "africa"){
            console.log(afrWildlife)
        }
        else if (continent == "australia"){
            console.log(ausWildlife)
        }
        else if (continent == "antarctica"){
            console.log(antWildlife)
        }
    }
}

function countryHint(){
    if (coins > 3){
        coins -= 4 
        console.log(`coins: ${coins}`);
        if (continent == "northAmerica"){
            console.log(naCountry)
        }
        else if (continent == "southAmerica"){
            console.log(saCountry)
        }
        else if (continent == "europe"){
            console.log(eurCountry)
        }
        else if (continent == "asia"){
            console.log(asiaCountry)
        }
        else if (continent == "africa"){
            console.log(afrCountry)
        }
        else if (continent == "australia"){
            console.log(ausCountry)
        }
        else if (continent == "antarctica"){
            console.log(antCiuntry)
        }
    }
}