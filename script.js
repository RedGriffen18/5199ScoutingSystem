// Star highlighting
const inputsS = document.querySelectorAll('input[name="defenseSpeed"]');
const speedStars = document.querySelectorAll('.speed-star');
setStars(inputsS, speedStars, "#16478e");

const inputsR = document.querySelectorAll('input[name="defenseDriver"]');
const defenseStars = document.querySelectorAll('.defense-star');
setStars(inputsR, defenseStars, "#16478e");

function setStars(inputs, stars, color) {
    inputs.forEach(input => {
        input.addEventListener('change', event => {
            const value = event.target.value;
            stars.forEach((star, index) => {
                if (index < value) {
                    star.style.backgroundColor = color;
                } else {
                    star.style.backgroundColor = "gray";
                }
            });
        });
    });
}

// Selection Order
// Picked up Auton Piece
const pieceData = document.querySelector('#pieceData');
const inputsP = document.querySelectorAll('.pickedOrder');
inputsP.forEach(input => {
    input.addEventListener('change', function() {
        if (this.checked) {
            pieceData.value += `.${this.value}`;
        } else {
            pieceData.value = pieceData.value.replace(`.${this.value}`, '');
        }
    });
});

// Auto Grid
const gridDataAuto = document.querySelector('#gridDataAuto');
const inputsA = document.querySelectorAll('.gridOrderAuto');
inputsA.forEach(input => {
    input.addEventListener('change', function() {
        if (this.checked) {
          gridDataAuto.value += `.${this.value}`;
        } else {
          gridDataAuto.value = gridDataAuto.value.replace(`.${this.value}`, '');
        }
    });
});

// Tele Grid
const gridDataTele = document.querySelector('#gridDataTele');
const inputsT = document.querySelectorAll('.gridOrderTele');
inputsT.forEach(input => {
    input.addEventListener('change', function() {
        if (this.checked) {
          gridDataTele.value += `.${this.value}`;
        } else {
          gridDataTele.value = gridDataTele.value.replace(`.${this.value}`, '');
        }
    });
});

// Defence Locations
const defenseLocations = document.querySelector('#defenseLocations');
const inputsD = document.querySelectorAll('.defenseLocation');
inputsD.forEach(input => {
    input.addEventListener('change', function() {
        if (this.checked) {
        defenseLocations.value += `.${this.value}`;
        } else {
        defenseLocations.value = defenseLocations.value.replace(`.${this.value}`, '');
        }
    });
});

// Charge Station Timer
let startTime;
let endTime;
let timerValue = document.getElementById("timerValue");
let timerStart = document.getElementById("timerStart");
let timerEnd = document.getElementById("timerEnd");
let intervalId;

// Start Timer Button and Time Output
timerStart.addEventListener("click", function() {
    startTime = new Date();
    intervalId = setInterval(function() {
        let elapsedTime = new Date() - startTime;
        let elapsedTimeInSeconds = elapsedTime / 1000;
        timerValue.value = elapsedTimeInSeconds.toFixed(1);            
    }, 100);
    timerStart.style.backgroundColor = "gray";
    timerEnd.style.backgroundColor = "#16478e";
    timerStart.disabled = true;
    timerEnd.disabled = false;
});

// Stop Timer Button
timerEnd.addEventListener("click", function() {
    clearInterval(intervalId);
    timerStart.style.backgroundColor = "#16478e";
    timerEnd.style.backgroundColor = "gray";
    timerStart.disabled = false;
    timerEnd.disabled = true;
});

// Field Swap
const teamColorInputs = document.querySelectorAll('input[name="scouter"]');
const teamColorBlock1 = document.getElementById("FieldDiv1");
const teamColorBlock2 = document.getElementById("FieldDiv2");
const fieldIcon = document.getElementById("field-icon");

teamColorInputs.forEach(input => {
    input.addEventListener('change', () => {
        const teamColorValue = document.querySelector('input[name="scouter"]:checked').value;
        const isRed = teamColorValue.startsWith('r');
        
        fieldIcon.src = isRed ? "Icons/fieldIconRed.png" : "Icons/fieldIcon.png";
        fieldIcon.style.width = "100%";
        teamColorBlock1.style.height = "75%";
        teamColorBlock2.style.height = "75%";
        teamColorBlock1.style.gridColumn = isRed ? "2" : "1";
        teamColorBlock2.style.gridColumn = isRed ? "1" : "2";
        teamColorBlock1.style.marginLeft = isRed ? '13%' : '55%';
        teamColorBlock2.style.marginLeft = isRed ? '21%' : '54%';
    });
});


// API - Team Numbers per Match
const scouterInputs = document.getElementsByName('scouter');
const matchInput = document.getElementsByName('match')[0];
const teamInput = document.getElementsByName('team')[0];

scouterInputs.forEach(input => {
    input.addEventListener("input", getTeams);
});
scouterInputs.forEach(input => {
    input.addEventListener("input", getHeader);
});
matchInput.addEventListener("input", () => {
    setTimeout(getHeader, 500);
});

teamInput.addEventListener("input", getHeader); 
matchInput.addEventListener("input", getTeams); 


function getTeams() {
    const apiKey = "WK7thdZDs2t0MyZEfmpaAdgUqpBn0CNsPmE4JyzigzpdYZz0EudEr7Ie9HI3Obxe";
    const eventKey = "2023gal";
    const matchNumber = parseInt(document.getElementsByName('match')[0].value);

    const endpoint = `https://www.thebluealliance.com/api/v3/event/${eventKey}/matches/simple`;

    fetch(endpoint, { headers: { "X-TBA-Auth-Key": apiKey } })
    .then(response => response.json())
    .then(matches => {
        const match = matches.find(match => match.match_number === matchNumber && match.comp_level === "qm");
        if (match) {
        const teamNumbers = [match.alliances.blue.team_keys, match.alliances.red.team_keys]
        .flat() .map(teamKey => teamKey.replace(/^frc/, ''));
        const [b1, b2, b3, r1, r2, r3] = teamNumbers;
        console.log(`Teams for match ${matchNumber}:${b1},${b2},${b3},${r1},${r2},${r3}`);
        document.getElementById('b1').textContent = b1;
        document.getElementById('b2').textContent = b2;
        document.getElementById('b3').textContent = b3;
        document.getElementById('r1').textContent = r1;
        document.getElementById('r2').textContent = r2;
        document.getElementById('r3').textContent = r3;
        document.getElementById('team').type = 'hidden';
        document.getElementById('team').value = '';
    } else {
        console.log(`Match ${matchNumber} not found or not a qualification match`);
        document.getElementById('b1').textContent = "Blue\u00A01";
        document.getElementById('b2').textContent = "Blue\u00A02";
        document.getElementById('b3').textContent = "Blue\u00A03";
        document.getElementById('r1').textContent = "Red\u00A01";
        document.getElementById('r2').textContent = "Red\u00A02";
        document.getElementById('r3').textContent = "Red\u00A03";
        document.getElementById('team').type = 'number';

        }
    })
    .catch(error => console.error(error));
}


// Header Function
function getHeader() {
    scouterInputs.forEach(input => {
        if (input.checked) {
            document.getElementById("team-image").src = "";
            const value = input.value;
            const MatchValue = document.getElementById('match').value;
            const TeamValue = document.getElementById('team').value;
            const headerValues = {
               'b1': 'Blue 1',
               'b2': 'Blue 2',
               'b3': 'Blue 3',
               'r1': 'Red 1',
               'r2': 'Red 2',
               'r3': 'Red 3',
            };
            if (TeamValue > 0 && headerValues[value]) {
               document.getElementById('header').textContent = headerValues[value] + ": " + TeamValue;
            }  else if (headerValues[value] && MatchValue !== "") {
               document.getElementById('header').textContent = headerValues[value] + ": " + document.getElementById(value).textContent;
            }  else {
                document.getElementById('header').textContent = headerValues[value] + ":"
            }
            var teamKey = document.getElementById(value).textContent;
            var year = "2023";
            var apiKey = "WK7thdZDs2t0MyZEfmpaAdgUqpBn0CNsPmE4JyzigzpdYZz0EudEr7Ie9HI3Obxe";
            var url = "https://www.thebluealliance.com/api/v3/team/frc" + teamKey + "/media/" + year + "?X-TBA-Auth-Key=" + apiKey;
            fetch("https://www.thebluealliance.com/api/v3/team/frc" + teamKey + "?X-TBA-Auth-Key=" + apiKey)
                .then(response => response.json())
                .then(data => {
                    const teamNickname = data.nickname;
                    document.getElementById('header').textContent += teamNickname ? " - " + teamNickname : "";
            })
            fetch(url)
                .then(response => response.json())
                .then(data => {
                    var media = data[0].details.base64Image;
                    var img = document.getElementById("team-image");
                    img.src = media ? "data:image/png;base64," + media : "";
            })
            
            .catch(error => console.error(error));
            }
    });
}

// Default Images for Pieces Picked
const checkbox1 = document.getElementById('starting_piece1');
const image1 = document.getElementById('blank1');

checkbox1.addEventListener('change', function() {
    if (checkbox1.checked) {
    image1.src = 'Icons/coneIcon.svg';
    } else {
    image1.src = 'icons/cubeIcon.svg';
    }
});
const checkbox2 = document.getElementById('starting_piece2');
const image2 = document.getElementById('blank2');

checkbox2.addEventListener('change', function() {
    if (checkbox2.checked) {
    image2.src = 'Icons/coneIcon.svg';
    } else {
    image2.src = 'icons/cubeIcon.svg';
    }
});
const checkbox3 = document.getElementById('starting_piece3');
const image3 = document.getElementById('blank3');

checkbox3.addEventListener('change', function() {
    if (checkbox3.checked) {
    image3.src = 'Icons/coneIcon.svg';
    } else {
    image3.src = 'icons/cubeIcon.svg';
    }
});
const checkbox4 = document.getElementById('starting_piece4');
const image4 = document.getElementById('blank4');

checkbox4.addEventListener('change', function() {
    if (checkbox4.checked) {
    image4.src = 'Icons/coneIcon.svg';
    } else {
    image4.src = 'icons/cubeIcon.svg';
    }
});

// API Grab for Match Number Guess
/*
function getMatchNumber() {
const apiKey = "WK7thdZDs2t0MyZEfmpaAdgUqpBn0CNsPmE4JyzigzpdYZz0EudEr7Ie9HI3Obxe";
const eventKey = "2023azgl";
const currentTime = Math.floor(Date.now() / 1000); // Get the current epoch time in seconds

const endpoint = `https://www.thebluealliance.com/api/v3/event/${eventKey}/matches/simple?type=qualification&comp_level=qm`;

fetch(endpoint, { headers: { "X-TBA-Auth-Key": apiKey } })
.then(response => response.json())
.then(matches => {
  matches.sort((a, b) => b.predicted_time - a.predicted_time);
  const match = matches.find(match => {
    const predictedStartTime = match.predicted_time;
    return predictedStartTime && predictedStartTime < currentTime && match.comp_level === "qm";
  });

  if (match) {
    document.getElementById("match").value = match.match_number;
    console.log(`Match number with later predicted start time than current time: ${currentTime}, ${match.predicted_time}, ${match.match_number}`);
  } else {
    console.log(`No match found with later predicted start time than current time`);
  }
})
.catch(error => console.error(error));
}


window.onload = function() {
getMatchNumber();
}
*/