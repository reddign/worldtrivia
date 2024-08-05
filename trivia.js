let guesses = 0;
let coins = 10;
let continent = ""
let x;

//get a random number between 1 and 7

function getNumber(){
    x = Math.floor(Math.random() * 7) + 1;
    alert(x)
}

// allocate a continent to each number

function updateCont(){
    if (x == 1){
        continent = "Africa"
    }
    else if (x == 2){
        continent = "Antartica"
    }
    else if (x == 3){
        continent = "Asia"   
    }
    else if (x == 4){
        continent = "Australia"   
    }
    else if (x == 5){
        continent = "Europe"   
    }
    else if (x == 6){
        continent = "North America"   
    }
    else if (x == 7){
        continent = "South America"   
    }
}

//do it all in one function :)

function pickContinent(){
    getNumber();
    updateCont();
    alert(continent);
}

pickContinent();