<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2023 - Scouting Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="Icons/5199Icon.png">
</head>
<body>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["name"])) {
      $name = $_GET["name"];
      $match = $_GET["match"];
      $team = $_GET["team"];
      $starting_piece = $_GET["starting_piece"];
      $starting_lane = $_GET["starting_lane"];
      $starting_piece1 = isset($_GET["starting_piece1"]) ? $_GET["starting_piece1"] : "cube";
      $starting_piece2 = isset($_GET["starting_piece2"]) ? $_GET["starting_piece2"] : "cube";
      $starting_piece3 = isset($_GET["starting_piece3"]) ? $_GET["starting_piece3"] : "cube";
      $starting_piece4 = isset($_GET["starting_piece4"]) ? $_GET["starting_piece4"] : "cube";
      $gridDataAuto = $_GET["gridDataAuto"];
      $pieceData = $_GET["pieceData"];
      $chargeAuto = $_GET["chargeAuto"];
      $community = $_GET["community"];
      $gridDataTele = $_GET["gridDataTele"];
      $chargeTele = $_GET["chargeTele"];
      $chargeBuddies = $_GET["chargeBuddies"];
      $defenseLocations = $_GET["defenseLocations"];
      $defenseSpeed = $_GET["defenseSpeed"];
      $defenseDriver = $_GET["defenseDriver"];
      $defenseComments = $_GET["defenseComments"];
      $funnyComments = $_GET["funnyComments"];
      $breakButton = isset($_GET["breakButton"]) ? $_GET["breakButton"] : "notbroke";
      $timerValue = $_GET["timerValue"];

      $file = fopen("scouting.csv", "a");
      $data = array($name, $match, $team, $starting_piece, $starting_lane, $starting_piece1, $starting_piece2, $starting_piece3, $starting_piece4, $gridDataAuto, $pieceData, $chargeAuto, $community, $gridDataTele, $timerValue, $chargeTele, $chargeBuddies, $defenseLocations, $defenseSpeed, $defenseDriver, $defenseComments, $funnyComments, $breakButton);
      fputcsv($file, $data);
      fclose($file);
      header("Location: index.php#section1");
      exit();
    }
?>
    <!--Nav Bar-->
    <div class="bar">
        <div class="grid" style="grid-template-columns: repeat(5, 1fr);">
            <a class="block" href="#section1" style="width: 75%; background: gray;"><img src="Icons/preIcon.png"></a>
            <a class="block" href="#section2" style="width: 75%; background: gray;"><img src="Icons/autonIcon.png"></a>
            <a class="block" href="#section3" style="width: 75%; background: gray;"><img src="Icons/teleIcon.png"></a>
            <a class="block" href="#section4" style="width: 75%; background: gray;"><img src="Icons/defenseIcon.png"></a>
            <a class="block" href="#section5" style="width: 75%; background: gray;"><img src="Icons/postIcon.png"></a>
        </div>
    </div>
    <!--Form Section-->
    <form class="form">
        <section class="section" id="section1">
            <div class="grid" style="grid-template-rows: repeat(5, 1fr); grid-template-columns: repeat(2, 1fr);">
                <!--Name/Match/Team-->
                <h1 class="block" style="grid-column: 1/3; grid-row: 1/2;"><strong>Pre-Game</strong></h1>
                <input class="block" type="text" name="name" placeholder="Scouter Name" style="grid-column: 1/2;">
                <input class="block" type="number" name="match" autocomplete="off" placeholder="Match Number" style="grid-column: 2/3;">
                <input class="block" type="number" name="team" autocomplete="off" placeholder="Team Number" style="grid-column: 1/2;">
                <!--Starting Piece Selection-->
                <div class="block">
                    <strong style="color: #16478e;">Robot Starting Piece</strong>
                    <div class="grid" style="grid-template-rows: repeat(1, 1fr); grid-template-columns: repeat(2, 1fr);">
                        <label class="radio block" style="background: gray; color: white; margin-top: 10%;">
                            <input type="radio" name="starting_piece" value="cone"> 
                            <span class="radioPiece" style="background-color: #16478e; border-radius: 20px;"></span>
                            <img src="Icons/coneIcon.svg" class="blank" style="width: auto; height: 100%;">
                        </label>
                        <label class="radio block" style="background: gray; color: white; margin-top: 10%;">
                            <input type="radio" name="starting_piece" value="cube"> 
                            <span class="radioPiece" style="background-color: #16478e; border-radius: 20px;"></span>
                            <img src="Icons/cubeIcon.svg" class="blank" style="width: auto; height: 100%;">
                        </label>
                    </div>
                </div>
                <div class="block" style="grid-row: 4/6; grid-column: 1/3; height: 100%; padding: 0; max-width: fit-content;">
                    <div class="grid" style="grid-template-rows: repeat(2, 1fr); grid-template-columns: repeat(2, 1fr); width: 100%; height: 100%;">
                        <img src="Icons/fieldIcon.png" class="block" style="padding: 0; border-radius: 0; grid-column: 1/3; grid-row: 1/3; height: 100%; width: auto;">
                        <!--Starting Lane-->
                        <div class="block" style="background: none; padding: 0; height: 75%; width: 32.5%; grid-column: 1; grid-row: 1/3; margin-left: 55%;">
                            <div class="grid" style="grid-template-rows: repeat(3, 1fr); grid-template-columns: repeat(1, 1fr);">
                                <label class="radio">
                                    <input type="radio" name="starting_lane" value="lane1"> 
                                    <img src="Icons/armIcon.svg" class="radioPiece" style="filter: invert(100%);">
                                </label>
                                <label class="radio">
                                    <input type="radio" name="starting_lane" value="lane2"> 
                                    <img src="Icons/armIcon.svg" class="radioPiece" style="filter: invert(100%);">
                                </label>
                                <label class="radio">
                                    <input type="radio" name="starting_lane" value="lane3"> 
                                    <img src="Icons/armIcon.svg" class="radioPiece" style="filter: invert(100%);">
                                </label>
                            </div>
                        </div> 
                        <!--Starting Pieces-->
                        <div class="block" style="background: none; padding: 0; height: 75%; width: 25%; grid-column: 2; grid-row: 1/3; margin-left: 54%;">
                            <div class="grid" style="grid-template-rows: repeat(4, 1fr); grid-template-columns: repeat(1, 1fr);">
                                <label class="checkbox" style="width: 100%; height: 100%;">
                                    <input type="checkbox" name="starting_piece1" value="cone"> 
                                    <img src="Icons/cubeIcon.svg" class="blank" >
                                    <img src="Icons/coneIcon.svg" class="checkboxPiece">
                                </label>
                                <label class="checkbox" style="width: 100%; height: 100%;">
                                    <input type="checkbox" name="starting_piece2" value="cone"> 
                                    <img src="Icons/cubeIcon.svg" class="blank">
                                    <img src="Icons/coneIcon.svg" class="checkboxPiece">
                                </label>
                                <label class="checkbox" style="width: 100%; height: 100%;">
                                    <input type="checkbox" name="starting_piece3" value="cone"> 
                                    <img src="Icons/cubeIcon.svg" class="blank">
                                    <img src="Icons/coneIcon.svg" class="checkboxPiece">
                                </label>
                                <label class="checkbox" style="width: 100%; height: 100%;">
                                    <input type="checkbox" name="starting_piece4" value="cone"> 
                                    <img src="Icons/cubeIcon.svg" class="blank">
                                    <img src="Icons/coneIcon.svg" class="checkboxPiece">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <section class="section" id="section2">
            <div class="grid" style="grid-template-rows: repeat(5, 1fr); grid-template-columns: repeat(2, 1fr);">
                <h1 class="block" style="width: 75%; grid-column: 1/3; grid-row: 1/2;"><strong>Autonomous</strong></h1>
                <!--Grid Selector-->
                <div class="block" style="grid-column: 1/3; grid-row: 2/4; padding: 0; width: auto; max-width: 80%; max-height: 100%";>
                    <div class="grid" style="grid-template-columns: repeat(9, 1fr); grid-template-rows: repeat(3, 1fr); width: fit-content; height: 100%;">
                        <img src="Icons/gridIcon.png" class="block" style="grid-row: 1/4; grid-column: 1/10; width: 100%; padding: 0; height: 100%;">

                        <label class="checkbox" style="width: 65%; height: 65%; padding: 0; grid-column: 1; grid-row: 1;">
                            <input type="checkbox" value="1" class="gridOrderAuto"> 
                            <img src="Icons/coneIcon.svg" class="checkboxPiece">
                        </label>
                        <label class="checkbox" style="width: 65%; height: 65%; padding: 0; grid-column: 2; grid-row: 1;">
                            <input type="checkbox" value="2" class="gridOrderAuto"> 
                            <img src="Icons/cubeIcon.svg" class="checkboxPiece">
                        </label>
                        <label class="checkbox" style="width: 65%; height: 65%; padding: 0; grid-column: 3; grid-row: 1;">
                            <input type="checkbox" value="3" class="gridOrderAuto"> 
                            <img src="Icons/coneIcon.svg" class="checkboxPiece">
                        </label>
                        <label class="checkbox" style="width: 65%; height: 65%; padding: 0; grid-column: 4; grid-row: 1;">
                            <input type="checkbox" value="4" class="gridOrderAuto"> 
                            <img src="Icons/coneIcon.svg" class="checkboxPiece">
                        </label>
                        <label class="checkbox" style="width: 65%; height: 65%; padding: 0; grid-column: 5; grid-row: 1;">
                            <input type="checkbox" value="5" class="gridOrderAuto"> 
                            <img src="Icons/cubeIcon.svg" class="checkboxPiece">
                        </label>
                        <label class="checkbox" style="width: 65%; height: 65%; padding: 0; grid-column: 6; grid-row: 1;">
                            <input type="checkbox" value="6" class="gridOrderAuto"> 
                            <img src="Icons/coneIcon.svg" class="checkboxPiece">
                        </label>
                        <label class="checkbox" style="width: 65%; height: 65%; padding: 0; grid-column: 7; grid-row: 1;">
                            <input type="checkbox" value="7" class="gridOrderAuto"> 
                            <img src="Icons/coneIcon.svg" class="checkboxPiece">
                        </label>
                        <label class="checkbox" style="width: 65%; height: 65%; padding: 0; grid-column: 8; grid-row: 1;">
                            <input type="checkbox" value="8" class="gridOrderAuto"> 
                            <img src="Icons/cubeIcon.svg" class="checkboxPiece">
                        </label>
                        <label class="checkbox" style="width: 65%; height: 65%; padding: 0; grid-column: 9; grid-row: 1;">
                            <input type="checkbox" value="9" class="gridOrderAuto"> 
                            <img src="Icons/coneIcon.svg" class="checkboxPiece">
                        </label>
                        
                        <label class="checkbox" style="width: 65%; height: 65%; padding: 0; grid-column: 1; grid-row: 2;">
                            <input type="checkbox" value="10" class="gridOrderAuto"> 
                            <img src="Icons/coneIcon.svg" class="checkboxPiece">
                        </label>
                        <label class="checkbox" style="width: 65%; height: 65%; padding: 0; grid-column: 2; grid-row: 2;">
                            <input type="checkbox" value="11" class="gridOrderAuto"> 
                            <img src="Icons/cubeIcon.svg" class="checkboxPiece">
                        </label>
                        <label class="checkbox" style="width: 65%; height: 65%; padding: 0; grid-column: 3; grid-row: 2;">
                            <input type="checkbox" value="12" class="gridOrderAuto"> 
                            <img src="Icons/coneIcon.svg" class="checkboxPiece">
                        </label>
                        <label class="checkbox" style="width: 65%; height: 65%; padding: 0; grid-column: 4; grid-row: 2;">
                            <input type="checkbox" value="13" class="gridOrderAuto"> 
                            <img src="Icons/coneIcon.svg" class="checkboxPiece">
                        </label>
                        <label class="checkbox" style="width: 65%; height: 65%; padding: 0; grid-column: 5; grid-row: 2;">
                            <input type="checkbox" value="14" class="gridOrderAuto"> 
                            <img src="Icons/cubeIcon.svg" class="checkboxPiece">
                        </label>
                        <label class="checkbox" style="width: 65%; height: 65%; padding: 0; grid-column: 6; grid-row: 2;">
                            <input type="checkbox" value="15" class="gridOrderAuto"> 
                            <img src="Icons/coneIcon.svg" class="checkboxPiece">
                        </label>
                        <label class="checkbox" style="width: 65%; height: 65%; padding: 0; grid-column: 7; grid-row: 2;">
                            <input type="checkbox" value="16" class="gridOrderAuto"> 
                            <img src="Icons/coneIcon.svg" class="checkboxPiece">
                        </label>
                        <label class="checkbox" style="width: 65%; height: 65%; padding: 0; grid-column: 8; grid-row: 2;">
                            <input type="checkbox" value="17" class="gridOrderAuto"> 
                            <img src="Icons/cubeIcon.svg" class="checkboxPiece">
                        </label>
                        <label class="checkbox" style="width: 65%; height: 65%; padding: 0; grid-column: 9; grid-row: 2;">
                            <input type="checkbox" value="18" class="gridOrderAuto"> 
                            <img src="Icons/coneIcon.svg" class="checkboxPiece">
                        </label>

                        <label class="checkbox" style="width: 65%; height: 65%; padding: 0; grid-column: 1; grid-row: 3;">
                            <input type="checkbox" value="19" class="gridOrderAuto"> 
                            <img src="Icons/coneIcon.svg" class="checkboxPiece">
                        </label>
                        <label class="checkbox" style="width: 65%; height: 65%; padding: 0; grid-column: 2; grid-row: 3;">
                            <input type="checkbox" value="20" class="gridOrderAuto"> 
                            <img src="Icons/cubeIcon.svg" class="checkboxPiece">
                        </label>
                        <label class="checkbox" style="width: 65%; height: 65%; padding: 0; grid-column: 3; grid-row: 3;">
                            <input type="checkbox" value="21" class="gridOrderAuto"> 
                            <img src="Icons/coneIcon.svg" class="checkboxPiece">
                        </label>
                        <label class="checkbox" style="width: 65%; height: 65%; padding: 0; grid-column: 4; grid-row: 3;">
                            <input type="checkbox" value="22" class="gridOrderAuto"> 
                            <img src="Icons/coneIcon.svg" class="checkboxPiece">
                        </label>
                        <label class="checkbox" style="width: 65%; height: 65%; padding: 0; grid-column: 5; grid-row: 3;">
                            <input type="checkbox" value="23" class="gridOrderAuto"> 
                            <img src="Icons/cubeIcon.svg" class="checkboxPiece">
                        </label>
                        <label class="checkbox" style="width: 65%; height: 65%; padding: 0; grid-column: 6; grid-row: 3;">
                            <input type="checkbox" value="24" class="gridOrderAuto"> 
                            <img src="Icons/coneIcon.svg" class="checkboxPiece">
                        </label>
                        <label class="checkbox" style="width: 65%; height: 65%; padding: 0; grid-column: 7; grid-row: 3;">
                            <input type="checkbox" value="25" class="gridOrderAuto"> 
                            <img src="Icons/coneIcon.svg" class="checkboxPiece">
                        </label>
                        <label class="checkbox" style="width: 65%; height: 65%; padding: 0; grid-column: 8; grid-row: 3;">
                            <input type="checkbox" value="26" class="gridOrderAuto"> 
                            <img src="Icons/cubeIcon.svg" class="checkboxPiece">
                        </label>
                        <label class="checkbox" style="width: 65%; height: 65%; padding: 0; grid-column: 9; grid-row: 3;">
                            <input type="checkbox" value="27" class="gridOrderAuto"> 
                            <img src="Icons/coneIcon.svg" class="checkboxPiece">
                        </label>
                        <input name="gridDataAuto" type="hidden" value="" id="gridDataAuto">
                    </div>
                </div>
                <!--Picked Pieces-->
                <div class="block" style="grid-column: 1/3;">
                    <strong style="color: #16478e;">Picked up Pieces</strong>
                    <div class="grid" style="grid-template-columns: repeat(4, 1fr); height: 100%; width: 100%;">
                        <label class="checkbox block" style="background: gray; color: white; margin-top: 10%;">
                            <input type="checkbox" value="1" class="pickedOrder">
                            <span class="checkboxPiece" style="background-color: #16478e; border-radius: 20px;"></span>
                            <strong style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);">Piece 1</strong>
                        </label>
                        <label class="checkbox block" style="background: gray; color: white; margin-top: 10%;">
                            <input type="checkbox" value="2" class="pickedOrder">
                            <span class="checkboxPiece" style="background-color: #16478e; border-radius: 20px;"></span>
                            <strong style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);">Piece 2</strong>
                        </label>
                        <label class="checkbox block" style="background: gray; color: white; margin-top: 10%;">
                            <input type="checkbox" value="3" class="pickedOrder">
                            <span class="checkboxPiece" style="background-color: #16478e; border-radius: 20px;"></span>
                            <strong style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);">Piece 3</strong>
                        </label>
                        <label class="checkbox block" style="background: gray; color: white; margin-top: 10%;">
                            <input type="checkbox" value="4" class="pickedOrder">
                            <span class="checkboxPiece" style="background-color: #16478e; border-radius: 20px;"></span>
                            <strong style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);">Piece 4</strong>
                        </label>
                    </div>
                </div>
                <input name="pieceData" type="hidden" id="pieceData" value="">
                <!--Charge Station-->
                <div class="block">
                    <strong style="color: #16478e;">Charge Station</strong>
                    <div class="grid" style="grid-template-columns: repeat(4, 1fr); height: 100%; width: 100%;">
                        <label class="radio block" style="background: gray; color: white; margin-top: 10%;">
                            <input type="radio" name="chargeAuto" value="noattempt"> 
                            <span class="radioPiece" style="background-color: #16478e; border-radius: 20px;"></span>
                            <img src="Icons/noattemptIcon.svg" class="blank" style="width: auto; height: 150%;">
                        </label>
                        <label class="radio block" style="background: gray; color: white; margin-top: 10%;">
                            <input type="radio" name="chargeAuto" value="fail">
                            <span class="radioPiece" style="background-color: #16478e; border-radius: 20px;"></span>
                            <img src="Icons/failedIcon.svg" class="blank" style="width: auto; height: 150%;">
                        </label>
                        <label class="radio block" style="background: gray; color: white; margin-top: 10%;">
                            <input type="radio" name="chargeAuto" value="dock">
                            <span class="radioPiece" style="background-color: #16478e; border-radius: 20px;"></span>
                            <img src="Icons/dockedIcon.svg" class="blank" style="width: auto; height: 150%;">
                        </label>
                        <label class="radio block" style="background: gray; color: white; margin-top: 10%;">
                            <input type="radio" name="chargeAuto" value="enable">
                            <span class="radioPiece" style="background-color: #16478e; border-radius: 20px;"></span>
                            <img src="Icons/enabledIcon.svg" class="blank" style="width: auto; height: 150%;">
                        </label>
                    </div>
                </div>
                <!--Left Community-->
                <div class="block">
                    <strong style="color: #16478e;">Left Community?</strong>
                    <div class="grid" style="grid-template-columns: repeat(2, 1fr); height: 100%; width: 100%;">
                        <label class="radio block" style="background: gray; color: white; margin-top: 10%;">
                            <input type="radio" name="community" value="stay">
                            <span class="radioPiece" style="background-color: #16478e; border-radius: 20px;"></span>
                            <strong style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);">Stayed</strong>
                        </label>
                        <label class="radio block" style="background: gray; color: white; margin-top: 10%;">
                            <input type="radio" name="community" value="left">
                            <span class="radioPiece" style="background-color: #16478e; border-radius: 20px;"></span>
                            <strong style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);">Left</strong>
                        </label>
                    </div>
                </div>
            </div>
        </section>
        <section class="section" id="section3">
            <div class="grid" style="grid-template-rows: repeat(5, 1fr); grid-template-columns: repeat(2, 1fr);">
                <h1 class="block" style="width: 75%; grid-column: 1/3; grid-row: 1/2;"><strong>Teleoperated</strong></h1>
                <div class="block" style="grid-column: 1/3; grid-row: 2/4; padding: 0; width: auto; max-width: 80%; max-height: 100%";>
                    <div class="grid" style="grid-template-columns: repeat(9, 1fr); grid-template-rows: repeat(3, 1fr); width: fit-content; height: 100%;">
                        <img src="Icons/gridIcon.png" class="block" style="grid-row: 1/4; grid-column: 1/10; width: 100%; padding: 0; height: 100%;">
                        
                        <label class="checkbox" style="width: 65%; height: 65%; padding: 0; grid-column: 1; grid-row: 1;">
                            <input type="checkbox" value="1" class="gridOrderTele"> 
                            <img src="Icons/coneIcon.svg" class="checkboxPiece">
                        </label>
                        <label class="checkbox" style="width: 65%; height: 65%; padding: 0; grid-column: 2; grid-row: 1;">
                            <input type="checkbox" value="2" class="gridOrderTele"> 
                            <img src="Icons/cubeIcon.svg" class="checkboxPiece">
                        </label>
                        <label class="checkbox" style="width: 65%; height: 65%; padding: 0; grid-column: 3; grid-row: 1;">
                            <input type="checkbox" value="3" class="gridOrderTele"> 
                            <img src="Icons/coneIcon.svg" class="checkboxPiece">
                        </label>
                        <label class="checkbox" style="width: 65%; height: 65%; padding: 0; grid-column: 4; grid-row: 1;">
                            <input type="checkbox" value="4" class="gridOrderTele"> 
                            <img src="Icons/coneIcon.svg" class="checkboxPiece">
                        </label>
                        <label class="checkbox" style="width: 65%; height: 65%; padding: 0; grid-column: 5; grid-row: 1;">
                            <input type="checkbox" value="5" class="gridOrderTele"> 
                            <img src="Icons/cubeIcon.svg" class="checkboxPiece">
                        </label>
                        <label class="checkbox" style="width: 65%; height: 65%; padding: 0; grid-column: 6; grid-row: 1;">
                            <input type="checkbox" value="6" class="gridOrderTele"> 
                            <img src="Icons/coneIcon.svg" class="checkboxPiece">
                        </label>
                        <label class="checkbox" style="width: 65%; height: 65%; padding: 0; grid-column: 7; grid-row: 1;">
                            <input type="checkbox" value="7" class="gridOrderTele"> 
                            <img src="Icons/coneIcon.svg" class="checkboxPiece">
                        </label>
                        <label class="checkbox" style="width: 65%; height: 65%; padding: 0; grid-column: 8; grid-row: 1;">
                            <input type="checkbox" value="8" class="gridOrderTele"> 
                            <img src="Icons/cubeIcon.svg" class="checkboxPiece">
                        </label>
                        <label class="checkbox" style="width: 65%; height: 65%; padding: 0; grid-column: 9; grid-row: 1;">
                            <input type="checkbox" value="9" class="gridOrderTele"> 
                            <img src="Icons/coneIcon.svg" class="checkboxPiece">
                        </label>
                        
                        <label class="checkbox" style="width: 65%; height: 65%; padding: 0; grid-column: 1; grid-row: 2;">
                            <input type="checkbox" value="10" class="gridOrderTele"> 
                            <img src="Icons/coneIcon.svg" class="checkboxPiece">
                        </label>
                        <label class="checkbox" style="width: 65%; height: 65%; padding: 0; grid-column: 2; grid-row: 2;">
                            <input type="checkbox" value="11" class="gridOrderTele"> 
                            <img src="Icons/cubeIcon.svg" class="checkboxPiece">
                        </label>
                        <label class="checkbox" style="width: 65%; height: 65%; padding: 0; grid-column: 3; grid-row: 2;">
                            <input type="checkbox" value="12" class="gridOrderTele"> 
                            <img src="Icons/coneIcon.svg" class="checkboxPiece">
                        </label>
                        <label class="checkbox" style="width: 65%; height: 65%; padding: 0; grid-column: 4; grid-row: 2;">
                            <input type="checkbox" value="13" class="gridOrderTele"> 
                            <img src="Icons/coneIcon.svg" class="checkboxPiece">
                        </label>
                        <label class="checkbox" style="width: 65%; height: 65%; padding: 0; grid-column: 5; grid-row: 2;">
                            <input type="checkbox" value="14" class="gridOrderTele"> 
                            <img src="Icons/cubeIcon.svg" class="checkboxPiece">
                        </label>
                        <label class="checkbox" style="width: 65%; height: 65%; padding: 0; grid-column: 6; grid-row: 2;">
                            <input type="checkbox" value="15" class="gridOrderTele"> 
                            <img src="Icons/coneIcon.svg" class="checkboxPiece">
                        </label>
                        <label class="checkbox" style="width: 65%; height: 65%; padding: 0; grid-column: 7; grid-row: 2;">
                            <input type="checkbox" value="16" class="gridOrderTele"> 
                            <img src="Icons/coneIcon.svg" class="checkboxPiece">
                        </label>
                        <label class="checkbox" style="width: 65%; height: 65%; padding: 0; grid-column: 8; grid-row: 2;">
                            <input type="checkbox" value="17" class="gridOrderTele"> 
                            <img src="Icons/cubeIcon.svg" class="checkboxPiece">
                        </label>
                        <label class="checkbox" style="width: 65%; height: 65%; padding: 0; grid-column: 9; grid-row: 2;">
                            <input type="checkbox" value="18" class="gridOrderTele"> 
                            <img src="Icons/coneIcon.svg" class="checkboxPiece">
                        </label>

                        <label class="checkbox" style="width: 65%; height: 65%; padding: 0; grid-column: 1; grid-row: 3;">
                            <input type="checkbox" value="19" class="gridOrderTele"> 
                            <img src="Icons/coneIcon.svg" class="checkboxPiece">
                        </label>
                        <label class="checkbox" style="width: 65%; height: 65%; padding: 0; grid-column: 2; grid-row: 3;">
                            <input type="checkbox" value="20" class="gridOrderTele"> 
                            <img src="Icons/cubeIcon.svg" class="checkboxPiece">
                        </label>
                        <label class="checkbox" style="width: 65%; height: 65%; padding: 0; grid-column: 3; grid-row: 3;">
                            <input type="checkbox" value="21" class="gridOrderTele"> 
                            <img src="Icons/coneIcon.svg" class="checkboxPiece">
                        </label>
                        <label class="checkbox" style="width: 65%; height: 65%; padding: 0; grid-column: 4; grid-row: 3;">
                            <input type="checkbox" value="22" class="gridOrderTele"> 
                            <img src="Icons/coneIcon.svg" class="checkboxPiece">
                        </label>
                        <label class="checkbox" style="width: 65%; height: 65%; padding: 0; grid-column: 5; grid-row: 3;">
                            <input type="checkbox" value="23" class="gridOrderTele"> 
                            <img src="Icons/cubeIcon.svg" class="checkboxPiece">
                        </label>
                        <label class="checkbox" style="width: 65%; height: 65%; padding: 0; grid-column: 6; grid-row: 3;">
                            <input type="checkbox" value="24" class="gridOrderTele"> 
                            <img src="Icons/coneIcon.svg" class="checkboxPiece">
                        </label>
                        <label class="checkbox" style="width: 65%; height: 65%; padding: 0; grid-column: 7; grid-row: 3;">
                            <input type="checkbox" value="25" class="gridOrderTele"> 
                            <img src="Icons/coneIcon.svg" class="checkboxPiece">
                        </label>
                        <label class="checkbox" style="width: 65%; height: 65%; padding: 0; grid-column: 8; grid-row: 3;">
                            <input type="checkbox" value="26" class="gridOrderTele"> 
                            <img src="Icons/cubeIcon.svg" class="checkboxPiece">
                        </label>
                        <label class="checkbox" style="width: 65%; height: 65%; padding: 0; grid-column: 9; grid-row: 3;">
                            <input type="checkbox" value="27" class="gridOrderTele"> 
                            <img src="Icons/coneIcon.svg" class="checkboxPiece">
                        </label>
                        <input name="gridDataTele" type="hidden" value="" id="gridDataTele">
                    </div>
                </div>
                <!--Charge Time-->
                <div class="block" style="grid-column: 1/3;">
                    <strong style="color: #16478e;">Charge Timer</strong>
                    <div class="grid" style="grid-template-columns: repeat(4, 1fr); height: 100%; width: 100%;">
                        <button class="block"id="timerStart" style="background-color: #16478e; color: white; margin-top: 10%;" >Start Timer</button>
                        <button class="block"id="timerEnd" style="background-color: gray; color: white; margin-top: 10%;" disabled>Stop Timer</button>
                        <input class="block" id="timerValue" name="timerValue" style="grid-column: 3/5; font-size: medium;" placeholder="Charge Time"></input>
                    </div>
                </div>
                <!--Charge Station-->
                <div class="block">
                    <strong style="color: #16478e;">Charge Station</strong>
                    <div class="grid" style="grid-template-columns: repeat(4, 1fr); height: 100%; width: 100%;">
                        <label class="radio block" style="background: gray; color: white; margin-top: 10%;">
                            <input type="radio" name="chargeTele" value="noattempt"> 
                            <span class="radioPiece" style="background-color: #16478e; border-radius: 20px;"></span>
                            <img src="Icons/noattemptIcon.svg" class="blank" style="width: auto; height: 150%;">
                        </label>
                        <label class="radio block" style="background: gray; color: white; margin-top: 10%;">
                            <input type="radio" name="chargeTele" value="fail">
                            <span class="radioPiece" style="background-color: #16478e; border-radius: 20px;"></span>
                            <img src="Icons/failedIcon.svg" class="blank" style="width: auto; height: 150%;">
                        </label>
                        <label class="radio block" style="background: gray; color: white; margin-top: 10%;">
                            <input type="radio" name="chargeTele" value="dock">
                            <span class="radioPiece" style="background-color: #16478e; border-radius: 20px;"></span>
                            <img src="Icons/dockedIcon.svg" class="blank" style="width: auto; height: 150%;">
                        </label>
                        <label class="radio block" style="background: gray; color: white; margin-top: 10%;">
                            <input type="radio" name="chargeTele" value="enable">
                            <span class="radioPiece" style="background-color: #16478e; border-radius: 20px;"></span>
                            <img src="Icons/enabledIcon.svg" class="blank" style="width: auto; height: 150%;">
                        </label>
                    </div>
                </div>
                <!--Charge Buddies-->
                <div class="block">
                    <strong style="color: #16478e;">Charge Buddies</strong>
                    <div class="grid" style="grid-template-columns: repeat(4, 1fr); height: 100%; width: 100%;">
                        <label class="radio block" style="background: gray; color: white; margin-top: 10%;">
                            <input type="radio" name="chargeBuddies" value="0">
                            <span class="radioPiece" style="background-color: #16478e; border-radius: 20px;"></span>
                            <strong style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);">0</strong>
                        </label>
                        <label class="radio block" style="background: gray; color: white; margin-top: 10%;">
                            <input type="radio" name="chargeBuddies" value="1">
                            <span class="radioPiece" style="background-color: #16478e; border-radius: 20px;"></span>
                            <strong style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);">1</strong>
                        </label>
                        <label class="radio block" style="background: gray; color: white; margin-top: 10%;">
                            <input type="radio" name="chargeBuddies" value="2">
                            <span class="radioPiece" style="background-color: #16478e; border-radius: 20px;"></span>
                            <strong style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);">2</strong>
                        </label>
                        <label class="radio block" style="background: gray; color: white; margin-top: 10%;">
                            <input type="radio" name="chargeBuddies" value="3">
                            <span class="radioPiece" style="background-color: #16478e; border-radius: 20px;"></span>
                            <strong style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);">3</strong>
                        </label>
                    </div>
                </div>
            </div>
        </section>
        <section class="section" id="section4">
            <div class="grid" style="grid-template-rows: repeat(5, 1fr); grid-template-columns: repeat(2, 1fr);">
                <h1 class="block" style="width: 75%; grid-column: 1/3; grid-row: 1/2;"><strong>Post-Game</strong></h1>
                <!--Defense Location-->
                <div class="block" style="grid-column: 1/3;">
                    <strong style="color: #16478e;">Defense Locations</strong>
                    <div class="grid" style="grid-template-columns: repeat(5, 1fr); height: 100%; width: 100%;">
                        <label class="checkbox block" style="background: gray; color: white; margin-top: 10%;">
                            <input type="checkbox" value="center" class="defenseLocation">
                            <span class="checkboxPiece" style="background-color: #16478e; border-radius: 20px;"></span>
                            <strong style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);">Center</strong>
                        </label>
                        <label class="checkbox block" style="background: gray; color: white; margin-top: 10%;">
                            <input type="checkbox" value="hpstation" class="defenseLocation">
                            <span class="checkboxPiece" style="background-color: #16478e; border-radius: 20px;"></span>
                            <strong style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);">HP Station</strong>
                        </label>
                        <label class="checkbox block" style="background: gray; color: white; margin-top: 10%;">
                            <input type="checkbox" value="lane1" class="defenseLocation"> 
                            <span class="checkboxPiece" style="background-color: #16478e; border-radius: 20px;"></span>
                            <strong style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);">Lane 1</strong>
                        </label>
                        <label class="checkbox block" style="background: gray; color: white; margin-top: 10%;">
                            <input type="checkbox" value="lane3" class="defenseLocation"> 
                            <span class="checkboxPiece" style="background-color: #16478e; border-radius: 20px;"></span>
                            <strong style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);">Lane 3</strong>
                        </label>
                        <label class="checkbox block" style="background: gray; color: white; margin-top: 10%;">
                            <input type="checkbox" value="chase" class="defenseLocation"> 
                            <span class="checkboxPiece" style="background-color: #16478e; border-radius: 20px;"></span>
                            <strong style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);">Chasing</strong>
                        </label>
                    </div>
                    <input name="defenseLocations" type="hidden" value="" id="defenseLocations">
                </div>
                <!--Speed Rating-->
                <div class="block">
                    <strong style="color: #16478e;">Speed Rating</strong>
                    <div class="grid" style="grid-template-columns: repeat(5, 1fr); height: 100%; width: 100%;">
                        <label class="radio block" style="background: gray; color: white; margin-top: 10%;">
                            <input type="radio" name="defenseSpeed" value="1"> 
                            <span class="radioPiece" style="background-color: #16478e; border-radius: 20px;"></span>
                            <img src="Icons/starIcon.svg" class="blank" style="width: auto; height: 100%; filter: invert(100%);">
                        </label>
                        <label class="radio block" style="background: gray; color: white; margin-top: 10%;">
                            <input type="radio" name="defenseSpeed" value="2"> 
                            <span class="radioPiece" style="background-color: #16478e; border-radius: 20px;"></span>
                            <img src="Icons/starIcon.svg" class="blank" style="width: auto; height: 100%; filter: invert(100%);">
                        </label>
                        <label class="radio block" style="background: gray; color: white; margin-top: 10%;">
                            <input type="radio" name="defenseSpeed" value="3" checked> 
                            <span class="radioPiece" style="background-color: #16478e; border-radius: 20px;"></span>
                            <img src="Icons/starIcon.svg" class="blank" style="width: auto; height: 100%; filter: invert(100%);">
                        </label>
                        <label class="radio block" style="background: gray; color: white; margin-top: 10%;">
                            <input type="radio" name="defenseSpeed" value="4"> 
                            <span class="radioPiece" style="background-color: #16478e; border-radius: 20px;"></span>
                            <img src="Icons/starIcon.svg" class="blank" style="width: auto; height: 100%; filter: invert(100%);">
                        </label>
                        <label class="radio block" style="background: gray; color: white; margin-top: 10%;">
                            <input type="radio" name="defenseSpeed" value="5"> 
                            <span class="radioPiece" style="background-color: #16478e; border-radius: 20px;"></span>
                            <img src="Icons/starIcon.svg" class="blank" style="width: auto; height: 100%; filter: invert(100%);">
                        </label>
                    </div>
                </div>
                <!--Defense Driver Rating-->
                <div class="block">
                    <strong style="color: #16478e;">Driver Rating</strong>
                    <div class="grid" style="grid-template-columns: repeat(5, 1fr); height: 100%; width: 100%;">
                        <label class="radio block" style="background: gray; color: white; margin-top: 10%;">
                            <input type="radio" name="defenseDriver" value="1"> 
                            <span class="radioPiece" style="background-color: #16478e; border-radius: 20px;"></span>
                            <img src="Icons/starIcon.svg" class="blank" style="width: auto; height: 100%; filter: invert(100%);">
                        </label>
                        <label class="radio block" style="background: gray; color: white; margin-top: 10%;">
                            <input type="radio" name="defenseDriver" value="2"> 
                            <span class="radioPiece" style="background-color: #16478e; border-radius: 20px;"></span>
                            <img src="Icons/starIcon.svg" class="blank" style="width: auto; height: 100%; filter: invert(100%);">
                        </label>
                        <label class="radio block" style="background: gray; color: white; margin-top: 10%;">
                            <input type="radio" name="defenseDriver" value="3" checked> 
                            <span class="radioPiece" style="background-color: #16478e; border-radius: 20px;"></span>
                            <img src="Icons/starIcon.svg" class="blank" style="width: auto; height: 100%; filter: invert(100%);">
                        </label>
                        <label class="radio block" style="background: gray; color: white; margin-top: 10%;">
                            <input type="radio" name="defenseDriver" value="4"> 
                            <span class="radioPiece" style="background-color: #16478e; border-radius: 20px;"></span>
                            <img src="Icons/starIcon.svg" class="blank" style="width: auto; height: 100%; filter: invert(100%);">
                        </label>
                        <label class="radio block" style="background: gray; color: white; margin-top: 10%;">
                            <input type="radio" name="defenseDriver" value="5"> 
                            <span class="radioPiece" style="background-color: #16478e; border-radius: 20px;"></span>
                            <img src="Icons/starIcon.svg" class="blank" style="width: auto; height: 100%; filter: invert(100%);">
                        </label>
                    </div>
                </div>
                <!--Defense  Comments-->
                <textarea class="block" name="defenseComments" style="height: 70%; grid-column: 1/2;" placeholder="Comments"></textarea>
                <textarea class="block" name="funnyComments" style="height: 70%; grid-column: 2/3;" placeholder="Funny Comments"></textarea>

                <!--Did It Break!?-->
                <div class="block" style="grid-column: 1/3;">
                    <label class="checkbox block" style="background: gray; color: white;">
                        <input type="checkbox" name="breakButton" value="broken">
                        <span class="checkboxPiece" style="background-color: red; border-radius: 20px;"></span>
                        <strong style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);">Did It Break?</strong>
                    </label>
                </div>
            </div>
        </section>
        <section class="section" id="section5">
            <div class="grid">
                <div class="block">
                    <div class="grid" style="grid-template-columns: repeat(2, 1fr); height: 100%; width: 100%;">
                        <button class="block" type="reset" style="background-color: #16478e; color: white;" >Reset</button>
                        <input class="block" type="submit" style="background-color: #16478e; color: white;" value="Submit">
                    </div>
                </div>
            </div>
        </section>
    </form>
</body>
</html>
<script>
// Selection Order
    // Picked up Auton Piece
    const pieceData = document.querySelector('#pieceData');
    const inputsP = document.querySelectorAll('.pickedOrder');
    inputsP.forEach(input => {
      input.addEventListener('change', function() {
        if (this.checked) {
          pieceData.value += `${this.value}.`;
        } else {
          pieceData.value = pieceData.value.replace(`${this.value}.`, '');
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
</script>