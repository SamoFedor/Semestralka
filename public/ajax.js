

function zmenaUdajov() {

    let povodneHeslo = document.getElementById('povodne');
    let noveHeslo = document.getElementById('nove');
    let noveRepeat = document.getElementById('nove_repeat');


    fetch("?c=prihlasenie&a=zmenaHeslaa", {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: '&povodnePassword=' + povodneHeslo.value +  '&Password=' + noveHeslo.value + '&repeatPassword=' + noveRepeat.value
    }).then(response => response.json()).then(response => {
            alert(response.toString());
        })
}

var cislo = 0;
var match =0;
function funRoster() {

    if(cislo == 0) {
        document.getElementById('Hraci').style.display ='block';
        cislo++;
    } else {
        document.getElementById('Hraci').style.display ='none';
        cislo--;
    }
}
function funMatches() {
    if(match == 0) {
        document.getElementById('games').style.display ='block';
        match++;
    } else {
        document.getElementById('games').style.display ='none';
        match--;
    }
}



function funCurry() {
    document.getElementById("textt").style.display = "none";
    document.getElementById("Lebron").style.display = "none";
    document.getElementById("Harden").style.display = "none";
    document.getElementById("Giannis").style.display = "none";
    document.getElementById("Curry").style.display = "block";
}
function funLebron() {
    document.getElementById("textt").style.display = "none";
    document.getElementById("Curry").style.display = "none";
    document.getElementById("Harden").style.display = "none";
    document.getElementById("Giannis").style.display = "none";
    document.getElementById("Lebron").style.display = "block";
}
function funHarden() {
    document.getElementById("textt").style.display = "none";
    document.getElementById("Curry").style.display = "none";
    document.getElementById("Lebron").style.display = "none";
    document.getElementById("Giannis").style.display = "none";
    document.getElementById("Harden").style.display = "block";
}
function funGiannis() {
    document.getElementById("textt").style.display = "none";
    document.getElementById("Curry").style.display = "none";
    document.getElementById("Harden").style.display = "none";
    document.getElementById("Lebron").style.display = "none";
    document.getElementById("Giannis").style.display = "block";
}