<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>2023 - Scouting Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="Icons/5199Icon.png">
</head>
<body>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["name"])) {
      $name = $_GET["name"];
      $match = $_GET["match"];
      $teamColor = $_GET["teamColor"];
      $team = $_GET["team"];
      $starting_piece = $_GET["starting_piece"];
      $starting_lane = $_GET["starting_lane"];
      $starting_piece1 = $_GET["starting_piece1"];
      $starting_piece2 = $_GET["starting_piece2"];
      $starting_piece3 = $_GET["starting_piece3"];
      $starting_piece4 = $_GET["starting_piece4"];
      $gridDataAuto = $_GET["gridDataAuto"];
      $pieceData = $_GET["pieceData"];
      $chargeAuto = $_GET["chargeAuto"];
      $community = $_GET["community"];
      $gridDataTele = $_GET["gridDataTele"];
      $chargeTele = $_GET["chargeTele"];
      $chargeTotal = $_GET["chargeTotal"];
      $defenseLocations = $_GET["defenseLocations"];
      $defenseSpeed = $_GET["defenseSpeed"];
      $defenseDriver = $_GET["defenseDriver"];
      $defenseComments = $_GET["defenseComments"];
      $funnyComments = $_GET["funnyComments"];
      $breakButton = $_GET["breakButton"];
      $tippingButton = $_GET["tippingButton"];
      $timerValue = $_GET["timerValue"];

      $file = fopen("scouting.csv", "a");
      $data = array($name, $match, $team, $teamColor, $starting_piece, $starting_lane, $starting_piece1, $starting_piece2, $starting_piece3, $starting_piece4, $gridDataAuto, $pieceData, $chargeAuto, $community, $gridDataTele, $timerValue, $chargeTele, $chargeTotal, $defenseLocations, $defenseSpeed, $defenseDriver, $defenseComments, $funnyComments, $breakButton, $tippingButton);
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
        <!--Pre-Game-->
        <section class="section" id="section1">
            <div class="grid" style="grid-template-rows: repeat(5, 1fr); grid-template-columns: repeat(4, 1fr);">
                <!--Name/Match/Team-->
                <h1 class="block" style="grid-column: 1/5; grid-row: 1/2;"><strong>Pre-Game</strong></h1>
                <div class="block" style="grid-column: 1/5; grid-row: 2/4;">
                    <div class="grid" style="grid-template-columns: repeat(5, 1fr); grid-template-rows: repeat(3, 1fr);">
                        <label class="radio block" style="background: gray; color: white; margin-top: 10%;">
                            <input type="radio" name="scouter" value="r1">
                            <span class="radioPiece" style="background-color: #f03431; border-radius: 20px;"></span>
                            <strong id="r1" style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);">Red&nbsp;1</strong>
                        </label>
                        <label class="radio block" style="background: gray; color: white; margin-top: 10%;">
                            <input type="radio" name="scouter" value="r2">
                            <span class="radioPiece" style="background-color: #f03431; border-radius: 20px;"></span>
                            <strong id="r2" style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);">Red&nbsp;2</strong>
                        </label>
                        <label class="radio block" style="background: gray; color: white; margin-top: 10%;">
                            <input type="radio" name="scouter" value="r3">
                            <span class="radioPiece" style="background-color: #f03431; border-radius: 20px;"></span>
                            <strong id="r3" style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);">Red&nbsp;3</strong>
                        </label>
                        <input class="block" type="text" name="name" placeholder="Name" style="grid-column: 4/6;">
                        <label class="radio block" style="background: gray; color: white; margin-top: 10%;">
                            <input type="radio" name="scouter" value="b1">
                            <span class="radioPiece" style="background-color: #16478e; border-radius: 20px;"></span>
                            <strong id="b1" style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);">Blue&nbsp;1</strong>
                        </label>
                        <label class="radio block" style="background: gray; color: white; margin-top: 10%;">
                            <input type="radio" name="scouter" value="b2">
                            <span class="radioPiece" style="background-color: #16478e; border-radius: 20px;"></span>
                            <strong id="b2" style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);">Blue&nbsp;2</strong>
                        </label>
                        <label class="radio block" style="background: gray; color: white; margin-top: 10%;">
                            <input type="radio" name="scouter" value="b3">
                            <span class="radioPiece" style="background-color: #16478e; border-radius: 20px;"></span>
                            <strong id="b3" style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);">Blue&nbsp;3</strong>
                        </label>
                        <input class="block" type="number" value="" id="match" name="match" autocomplete="off" placeholder="Match #" style="grid-column: 4/6;" pattern="[0-9]*">
                        <label class="checkbox block" style="background: gray; color: white; grid-column: 1/6;">
                            <input type="checkbox" name="noshow" value="noshow">
                            <span class="checkboxPiece" style="background-color: black; border-radius: 20px;"></span>
                            <strong style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);">No Show</strong>
                        </label>
                    </div>
                </div>
                <!--Starting Piece Selection-->
                <div class="block" style="grid-row: 4/6; grid-column: 4/5;">
                    <strong>Robot Starting Piece</strong>
                    <div class="grid" style="grid-template-rows: repeat(1, 1fr); grid-template-rows: repeat(3, 1fr);">
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
                        <label class="radio block" style="background: gray; color: white; margin-top: 10%;">
                            <input type="radio" name="starting_piece" value="none"> 
                            <span class="radioPiece" style="background-color: #16478e; border-radius: 20px;"></span>
                            <strong style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);">None</strong>
                        </label>
                    </div>
                </div>
                <div class="block" style="grid-row: 4/6; grid-column: 1/4; height: 100%; padding: 0; margin: 0; max-width: fit-content;">
                    <strong>Starting Lane and Starting Piece Selection</strong>
                    <p>Select one of the lanes and click to change starting piece Icons</p>
                    <div class="grid" style="grid-template-rows: repeat(2, 1fr); grid-template-columns: repeat(2, 1fr); width: 100%; max-height: 80%;">
                        <img id="field-icon" src="" class="block" style="padding: 0; grid-column: 1/3; grid-row: 1/3; max-height: 100%; width: 100%;">
                        <!--Starting Lane-->
                        <div id="FieldDiv1" class="block" style="background: none; padding: 0; height: 75%; width: 32.5%; grid-column: 1; grid-row: 1/3; margin-left: 55%;">
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
                        <div id="FieldDiv2" class="block" style="background: none; padding: 0; height: 75%; width: 25%; grid-column: 2; grid-row: 1/3; margin-left: 54%;">
                            <div class="grid" style="grid-template-rows: repeat(4, 1fr); grid-template-columns: repeat(1, 1fr);">
                                <label class="checkbox" style="width: 100%; height: 100%;">
                                    <input type="checkbox" name="starting_piece1" id="starting_piece1" value="cone"> 
                                    <img src="Icons/cubeIcon.svg" class="blank" >
                                    <img src="Icons/coneIcon.svg" class="checkboxPiece">
                                </label>
                                <label class="checkbox" style="width: 100%; height: 100%;">
                                    <input type="checkbox" name="starting_piece2" id="starting_piece2" value="cone"> 
                                    <img src="Icons/cubeIcon.svg" class="blank">
                                    <img src="Icons/coneIcon.svg" class="checkboxPiece">
                                </label>
                                <label class="checkbox" style="width: 100%; height: 100%;">
                                    <input type="checkbox" name="starting_piece3" id="starting_piece3" value="cone"> 
                                    <img src="Icons/cubeIcon.svg" class="blank">
                                    <img src="Icons/coneIcon.svg" class="checkboxPiece">
                                </label>
                                <label class="checkbox" style="width: 100%; height: 100%;">
                                    <input type="checkbox" name="starting_piece4" id="starting_piece4" value="cone"> 
                                    <img src="Icons/cubeIcon.svg" class="blank">
                                    <img src="Icons/coneIcon.svg" class="checkboxPiece">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!--Autonomous-->
        <section class="section" id="section2">
            <div class="grid" style="grid-template-rows: repeat(5, 1fr); grid-template-columns: repeat(2, 1fr);">
                <h1 class="block" style="width: 75%; grid-column: 1/3; grid-row: 1/2;"><strong>Autonomous</strong></h1>
                <!--Grid Selector-->
                <div class="block" style="grid-column: 1/3; grid-row: 2/4; padding: 0; width: auto; max-width: 80%; max-height: 100%";>
                    <strong>Grid Placement Selection</strong>
                    <p>Select the position that the robot scores a game piece during Autonomous</p>
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
                <input name="pieceData" type="hidden" id="pieceData" value="">
                <!--Charge Station-->
                <div class="block">
                    <strong >Charge Station</strong>
                    <p>No Attempt - Failed - Docked - Enabled</p>
                    <div class="grid" style="grid-template-columns: repeat(4, 1fr); grid-template-rows: repeat(2, 1fr); height: 100%; width: 100%;">
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
                        <label class="checkbox block" style="background: gray; color: white;  margin-top: 5%; grid-column: 1/5">
                            <input type="checkbox" name="community" value="left">
                            <span class="checkboxPiece" style="background-color: #16478e; border-radius: 20px;"></span>
                            <strong style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);">Left Community</strong>
                        </label>
                    </div>
                </div>
            <!--Auton Pickup-->
                <div class="block">
                    <strong>Auton Pickup Pieces</strong>
                    <p>Select the pieces that the robot picked up durring auton</p>
                    <div class="grid" style="grid-template-rows: repeat(2, 1fr); grid-template-columns: repeat(2, 1fr); width: 100%; max-height: 100%; height: fit-content;">
                        <img id="field-icon2" src="" class="block" style="padding: 0; grid-column: 1/3; grid-row: 1/3; max-height: 100%; width: 100%;">
                        <div id="FieldDiv22" class="block" style="background: none; padding: 0; height: 75%; width: 25%; grid-column: 2; grid-row: 1/3; margin-left: 54%;">
                            <div class="grid" style="grid-template-rows: repeat(4, 1fr); grid-template-columns: repeat(1, 1fr);">
                                <label class="checkbox" style="width: 100%; height: 100%;">
                                    <input type="checkbox" name="starting_piece1" value="starting_piece1"> 
                                    <img src="Icons/cubeIcon.svg" class="blank" id="blank1">
                                    <img src="Icons/checkBox.svg" class="checkboxPiece" style="background-color: transparent;">
                                </label>
                                <label class="checkbox" style="width: 100%; height: 100%;">
                                    <input type="checkbox" name="starting_piece2" value="starting_piece2"> 
                                    <img src="Icons/cubeIcon.svg" class="blank" id="blank2">
                                    <img src="Icons/checkBox.svg" class="checkboxPiece" style="background-color: transparent;">
                                </label>
                                <label class="checkbox" style="width: 100%; height: 100%;">
                                    <input type="checkbox" name="starting_piece3" value="starting_piece3"> 
                                    <img src="Icons/cubeIcon.svg" class="blank" id="blank3">
                                    <img src="Icons/checkBox.svg" class="checkboxPiece" style="background-color: transparent;">
                                </label>
                                <label class="checkbox" style="width: 100%; height: 100%;">
                                    <input type="checkbox" name="starting_piece4" value="starting_piece4"> 
                                    <img src="Icons/cubeIcon.svg" class="blank" id="blank4">
                                    <img src="Icons/checkBox.svg" class="checkboxPiece" style="background-color: transparent;">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!--Teleoperated-->
        <section class="section" id="section3">
            <div class="grid" style="grid-template-rows: repeat(5, 1fr); grid-template-columns: repeat(2, 1fr);">
                <h1 class="block" style="width: 75%; grid-column: 1/3; grid-row: 1/2;"><strong>Teleoperated</strong></h1>
                <div class="block" style="grid-column: 1/3; grid-row: 2/4; padding: 0; width: auto; max-width: 80%; max-height: 100%";>
                <strong>Grid Placement Selection</strong>
                <p>Select the position that the robot scores a game piece during Teleoperated</p>    
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
                <div class="block" style="grid-column: 1; grid-row: 4/6;">
                    <strong >Charge Timer</strong>
                    <p>Start when the bot first touches the Charging Station. Stop when the bot stops moving</p>
                    <div class="grid" style="grid-template-rows: repeat(2, 1fr); grid-template-columns: repeat(2, 1fr); height: 100%; width: 100%;">
                        <input class="block" id="timerValue" name="timerValue" style="font-size: medium; margin-top: 5%; grid-column: 1/3;" placeholder="Charge Time"></input>
                        <button class="block"id="timerStart" style="background-color: #16478e; color: white; margin-top: 10%;" >Start Timer</button>
                        <button class="block"id="timerEnd" style="background-color: gray; color: white; margin-top: 10%;" disabled>Stop Timer</button>
                    </div>
                </div>
                <!--Total Charge Robots-->
                <div class="block">
                    <strong >Total Charge Robots</strong>
                    <p>Number of robots on the charge station</p>
                    <div class="grid" style="grid-template-columns: repeat(4, 1fr); height: 100%; width: 100%;">
                        <label class="radio block" style="background: gray; color: white; margin-top: 10%;">
                            <input type="radio" name="chargeTotal" value="0">
                            <span class="radioPiece" style="background-color: #16478e; border-radius: 20px;"></span>
                            <strong style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);">0</strong>
                        </label>
                        <label class="radio block" style="background: gray; color: white; margin-top: 10%;">
                            <input type="radio" name="chargeTotal" value="1">
                            <span class="radioPiece" style="background-color: #16478e; border-radius: 20px;"></span>
                            <strong style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);">1</strong>
                        </label>
                        <label class="radio block" style="background: gray; color: white; margin-top: 10%;">
                            <input type="radio" name="chargeTotal" value="2">
                            <span class="radioPiece" style="background-color: #16478e; border-radius: 20px;"></span>
                            <strong style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);">2</strong>
                        </label>
                        <label class="radio block" style="background: gray; color: white; margin-top: 10%;">
                            <input type="radio" name="chargeTotal" value="3">
                            <span class="radioPiece" style="background-color: #16478e; border-radius: 20px;"></span>
                            <strong style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);">3</strong>
                        </label>
                    </div>
                </div>
                <!--Charge Station-->
                <div class="block" style="margin-top: 5%;">
                    <strong >Charge Station</strong>
                    <p>No Attempt - Failed - Docked - Enabled</p>
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
                        <label class="radio block" style="background: gray; color: white; margin-top: 10%; grid-column: 1/5;">
                            <input type="radio" name="chargeTele" value="park">
                            <span class="radioPiece" style="background-color: #16478e; border-radius: 20px;"></span>
                            <strong style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);">Parked</strong>
                        </label>
                    </div>
                </div>
            </div>
        </section>
        <!--Post-Game-->
        <section class="section" id="section4">
            <div class="grid" style="grid-template-rows: repeat(5, 1fr); grid-template-columns: repeat(2, 1fr);">
                <h1 class="block" style="width: 75%; grid-column: 1/3; grid-row: 1/2;"><strong>Post-Game</strong></h1>
                <!--Defense Location-->
                <div class="block" style="grid-column: 1/3;">
                    <strong >Defense Locations</strong>
                    <div class="grid" style="grid-template-columns: repeat(5, 1fr); height: 100%; width: 100%;">
                        <label class="checkbox block" style="background: gray; color: white; margin-top: 10%;">
                            <input type="checkbox" value="center" class="defenseLocation">
                            <span class="checkboxPiece" style="background-color: #16478e; border-radius: 20px;"></span>
                            <strong style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);">Center</strong>
                        </label>
                        <label class="checkbox block" style="background: gray; color: white; margin-top: 10%;">
                            <input type="checkbox" value="hpstation" class="defenseLocation">
                            <span class="checkboxPiece" style="background-color: #16478e; border-radius: 20px;"></span>
                            <strong style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);">HP</strong>
                        </label>
                        <label class="checkbox block" style="background: gray; color: white; margin-top: 10%;">
                            <input type="checkbox" value="lane1" class="defenseLocation"> 
                            <span class="checkboxPiece" style="background-color: #16478e; border-radius: 20px;"></span>
                            <strong style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);">Lane&nbsp;1</strong>
                        </label>
                        <label class="checkbox block" style="background: gray; color: white; margin-top: 10%;">
                            <input type="checkbox" value="lane3" class="defenseLocation"> 
                            <span class="checkboxPiece" style="background-color: #16478e; border-radius: 20px;"></span>
                            <strong style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);">Lane&nbsp;3</strong>
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
                    <strong >Bot Speed Rating</strong>
                    <div class="grid" style="grid-template-columns: repeat(5, 1fr); height: 100%; width: 100%;">
                        <label class="radio block" id="defenseSpeed1" style="background: gray; color: white; margin-top: 10%;">
                            <input type="radio" name="defenseSpeed" value="1"> 
                            <span class="radioPiece" style="background-color: #16478e; border-radius: 20px;"></span>
                            <img src="Icons/starIcon.svg" class="blank" style="width: auto; height: 100%; filter: invert(100%);">
                        </label>
                        <label class="radio block" id="defenseSpeed2" style="background: gray; color: white; margin-top: 10%;">
                            <input type="radio" name="defenseSpeed" value="2"> 
                            <span class="radioPiece" style="background-color: #16478e; border-radius: 20px;"></span>
                            <img src="Icons/starIcon.svg" class="blank" style="width: auto; height: 100%; filter: invert(100%);">
                        </label>
                        <label class="radio block" id="defenseSpeed3" style="background: gray; color: white; margin-top: 10%;">
                            <input type="radio" name="defenseSpeed" value="3"> 
                            <span class="radioPiece" style="background-color: #16478e; border-radius: 20px;"></span>
                            <img src="Icons/starIcon.svg" class="blank" style="width: auto; height: 100%; filter: invert(100%);">
                        </label>
                        <label class="radio block" id="defenseSpeed4" style="background: gray; color: white; margin-top: 10%;">
                            <input type="radio" name="defenseSpeed" value="4"> 
                            <span class="radioPiece" style="background-color: #16478e; border-radius: 20px;"></span>
                            <img src="Icons/starIcon.svg" class="blank" style="width: auto; height: 100%; filter: invert(100%);">
                        </label>
                        <label class="radio block" id="defenseSpeed5" style="background: gray; color: white; margin-top: 10%;">
                            <input type="radio" name="defenseSpeed" value="5"> 
                            <span class="radioPiece" style="background-color: #16478e; border-radius: 20px;"></span>
                            <img src="Icons/starIcon.svg" class="blank" style="width: auto; height: 100%; filter: invert(100%);">
                        </label>
                    </div>
                </div>
                <!--Defense Driver Rating-->
                <div class="block">
                    <strong >Driver Rating</strong>
                    <div class="grid" style="grid-template-columns: repeat(5, 1fr); height: 100%; width: 100%;">
                        <label class="radio block" id="defenseDriver1" style="background: gray; color: white; margin-top: 10%;">
                            <input type="radio" name="defenseDriver" value="1"> 
                            <span class="radioPiece" style="background-color: #16478e; border-radius: 20px;"></span>
                            <img src="Icons/starIcon.svg" class="blank" style="width: auto; height: 100%; filter: invert(100%);">
                        </label>
                        <label class="radio block" id="defenseDriver2" style="background: gray; color: white; margin-top: 10%;">
                            <input type="radio" name="defenseDriver" value="2"> 
                            <span class="radioPiece" style="background-color: #16478e; border-radius: 20px;"></span>
                            <img src="Icons/starIcon.svg" class="blank" style="width: auto; height: 100%; filter: invert(100%);">
                        </label>
                        <label class="radio block" id="defenseDriver3" style="background: gray; color: white; margin-top: 10%;">
                            <input type="radio" name="defenseDriver" value="3"> 
                            <span class="radioPiece" style="background-color: #16478e; border-radius: 20px;"></span>
                            <img src="Icons/starIcon.svg" class="blank" style="width: auto; height: 100%; filter: invert(100%);">
                        </label>
                        <label class="radio block" id="defenseDriver4" style="background: gray; color: white; margin-top: 10%;">
                            <input type="radio" name="defenseDriver" value="4"> 
                            <span class="radioPiece" style="background-color: #16478e; border-radius: 20px;"></span>
                            <img src="Icons/starIcon.svg" class="blank" style="width: auto; height: 100%; filter: invert(100%);">
                        </label>
                        <label class="radio block" id="defenseDriver5" style="background: gray; color: white; margin-top: 10%;">
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
                <div class="block" style="grid-column: 1;">
                    <label class="checkbox block" style="background: gray; color: white;">
                        <input type="checkbox" name="breakButton" value="broken">
                        <span class="checkboxPiece" style="background-color: #f03431; border-radius: 20px;"></span>
                        <strong style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);">Break?</strong>
                    </label>
                </div>
                <!--Tipsy Button-->
                <div class="block" style="grid-column: 2;">
                    <label class="checkbox block" style="background: gray; color: white;">
                        <input type="checkbox" name="tippingButton" value="tipping">
                        <span class="checkboxPiece" style="background-color: #f03431; border-radius: 20px;"></span>
                        <strong style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);">Tipping?</strong>
                    </label>
                </div>
            </div>
        </section>
        <section class="section" id="section5">
            <div class="grid">
                <div class="block" style="height: 15%;">
                    <strong>Are you ready to submit?</strong>
                    <div class="grid" style="grid-template-columns: repeat(1, 1fr); height: 100%; width: 100%;">
                        <input class="block" type="submit" style="background-color: #16478e; color: white; font-size: larger;" value="Submit">
                    </div>
                </div>
            </div>
        </section>
    </form>
</body>
</html>
<script>
// Star Propper highlighting
    //Speed Rating Stars
    const inputsS = document.querySelectorAll('input[name="defenseSpeed"]');
    const defenseSpeed1 = document.getElementById("defenseSpeed1");
    const defenseSpeed2 = document.getElementById("defenseSpeed2");
    const defenseSpeed3 = document.getElementById("defenseSpeed3");
    const defenseSpeed4 = document.getElementById("defenseSpeed4");
    const defenseSpeed5 = document.getElementById("defenseSpeed5");

    inputsS.forEach(input => {
      input.addEventListener('change', event => {
        const value = event.target.value;
        if (value === "2") {
          defenseSpeed1.style.backgroundColor = "#16478e";
          defenseSpeed2.style.backgroundColor = "gray";
          defenseSpeed3.style.backgroundColor = "gray";
          defenseSpeed4.style.backgroundColor = "gray";
        } else if (value === "3") {
          defenseSpeed1.style.backgroundColor = "#16478e";
          defenseSpeed2.style.backgroundColor = "#16478e";
          defenseSpeed3.style.backgroundColor = "gray";
          defenseSpeed4.style.backgroundColor = "gray";
        } else if (value === "4") {
          defenseSpeed1.style.backgroundColor = "#16478e";
          defenseSpeed2.style.backgroundColor = "#16478e";
          defenseSpeed3.style.backgroundColor = "#16478e";
          defenseSpeed4.style.backgroundColor = "gray";
        }else if (value === "5") {
          defenseSpeed1.style.backgroundColor = "#16478e";
          defenseSpeed2.style.backgroundColor = "#16478e";
          defenseSpeed3.style.backgroundColor = "#16478e";
          defenseSpeed4.style.backgroundColor = "#16478e";
        } else {
          defenseSpeed1.style.backgroundColor = "gray";
          defenseSpeed2.style.backgroundColor = "gray";
          defenseSpeed3.style.backgroundColor = "gray";
          defenseSpeed4.style.backgroundColor = "gray";
        }
      });
    });

    defenseSpeed1.style.backgroundColor = "#16478e";
    defenseSpeed2.style.backgroundColor = "#16478e";
    defenseSpeed3.style.backgroundColor = "#16478e";

    // Driver Rating Stars
    const inputsR = document.querySelectorAll('input[name="defenseDriver"]');
    const defenseDriver1 = document.getElementById("defenseDriver1");
    const defenseDriver2 = document.getElementById("defenseDriver2");
    const defenseDriver3 = document.getElementById("defenseDriver3");
    const defenseDriver4 = document.getElementById("defenseDriver4");
    const defenseDriver5 = document.getElementById("defenseDriver5");

    inputsR.forEach(input => {
      input.addEventListener('change', event => {
        const value = event.target.value;
        if (value === "2") {
          defenseDriver1.style.backgroundColor = "#16478e";
          defenseDriver2.style.backgroundColor = "gray";
          defenseDriver3.style.backgroundColor = "gray";
          defenseDriver4.style.backgroundColor = "gray";
        } else if (value === "3") {
          defenseDriver1.style.backgroundColor = "#16478e";
          defenseDriver2.style.backgroundColor = "#16478e";
          defenseDriver3.style.backgroundColor = "gray";
          defenseDriver4.style.backgroundColor = "gray";
        } else if (value === "4") {
          defenseDriver1.style.backgroundColor = "#16478e";
          defenseDriver2.style.backgroundColor = "#16478e";
          defenseDriver3.style.backgroundColor = "#16478e";
          defenseDriver4.style.backgroundColor = "gray";
        }else if (value === "5") {
          defenseDriver1.style.backgroundColor = "#16478e";
          defenseDriver2.style.backgroundColor = "#16478e";
          defenseDriver3.style.backgroundColor = "#16478e";
          defenseDriver4.style.backgroundColor = "#16478e";
        } else {
          defenseDriver1.style.backgroundColor = "gray";
          defenseDriver2.style.backgroundColor = "gray";
          defenseDriver3.style.backgroundColor = "gray";
          defenseDriver4.style.backgroundColor = "gray";
        }
      });
    });

    defenseDriver1.style.backgroundColor = "#16478e";
    defenseDriver2.style.backgroundColor = "#16478e";
    defenseDriver3.style.backgroundColor = "#16478e";

    

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
    
var teamColorInputs = document.querySelectorAll('input[name="scouter"]');
var teamColorBlock1 = document.getElementById("FieldDiv1");
var teamColorBlock2 = document.getElementById("FieldDiv2");
var teamColorBlock22 = document.getElementById("FieldDiv22");


teamColorInputs.forEach(function(input) {
  input.addEventListener('change', function() {
    var teamColorInput = document.querySelector('input[name="scouter"]:checked');
    var teamColorValue = teamColorInput.value;

    if (teamColorValue === "r1" || teamColorValue === "r2" || teamColorValue === "r3") {
      teamColorBlock1.style.gridColumn = "2";
      teamColorBlock1.style.marginLeft = "13%";
    } else {
      teamColorBlock1.style.gridColumn = "1";
      teamColorBlock1.style.marginLeft = "55%";
    }

    if (teamColorValue === "r1" || teamColorValue === "r2" || teamColorValue === "r3") {
      teamColorBlock2.style.gridColumn = "1";
      teamColorBlock2.style.marginLeft = "21%";
    } else {
      teamColorBlock2.style.gridColumn = "2";
      teamColorBlock2.style.marginLeft = "54%";
    }

    if (teamColorValue === "r1" || teamColorValue === "r2" || teamColorValue === "r3") {
      teamColorBlock22.style.gridColumn = "1";
      teamColorBlock22.style.marginLeft = "21%";
    } else {
      teamColorBlock22.style.gridColumn = "2";
      teamColorBlock22.style.marginLeft = "54%";
    }

    var fieldIcon = document.getElementById("field-icon");
    if (teamColorValue === "r1" || teamColorValue === "r2" || teamColorValue === "r3") {
      fieldIcon.src = "Icons/fieldIconRed.png";
    } else if (teamColorValue === "b1" || teamColorValue === "b2" || teamColorValue === "b3") {
      fieldIcon.src = "Icons/fieldIcon.png";
    }
    else {
        fieldIcon.src = "";
    }

    var fieldIcon = document.getElementById("field-icon2");
    if (teamColorValue === "r1" || teamColorValue === "r2" || teamColorValue === "r3") {
      fieldIcon.src = "Icons/fieldIconRed.png";
    } else if (teamColorValue === "b1" || teamColorValue === "b2" || teamColorValue === "b3") {
      fieldIcon.src = "Icons/fieldIcon.png";
    }
    else {
        fieldIcon.src = "";
    }

  });
});
// API Grab for scouter Keys
function getTeams() {
  const apiKey = "WK7thdZDs2t0MyZEfmpaAdgUqpBn0CNsPmE4JyzigzpdYZz0EudEr7Ie9HI3Obxe";
  const eventKey = "2023azgl";
  const matchNumber = parseInt(document.getElementsByName('match')[0].value);

  const endpoint = `https://www.thebluealliance.com/api/v3/event/${eventKey}/matches/simple?type=qualification&comp_level=qm`;

  fetch(endpoint, { headers: { "X-TBA-Auth-Key": apiKey } })
    .then(response => response.json())
    .then(matches => {
      const match = matches.find(match => match.match_number === matchNumber && match.comp_level === "qm");
      if (match) {
        const teamNumbers = [match.alliances.blue.team_keys, match.alliances.red.team_keys].flat()
          .map(teamKey => teamKey.replace(/^frc/, ''));
        const [b1, b2, b3, r1, r2, r3] = teamNumbers;
        console.log(`Teams for match ${matchNumber}:${b1},${b2},${b3},${r1},${r2},${r3}`);
        document.getElementById('b1').textContent = b1;
        document.getElementById('b2').textContent = b2;
        document.getElementById('b3').textContent = b3;
        document.getElementById('r1').textContent = r1;
        document.getElementById('r2').textContent = r2;
        document.getElementById('r3').textContent = r3;
    } else {
        console.log(`Match ${matchNumber} not found or not a qualification match`);
        document.getElementById('b1').textContent = "Blue 1";
        document.getElementById('b2').textContent = "Blue 2";
        document.getElementById('b3').textContent = "Blue 3";
        document.getElementById('r1').textContent = "Red 1";
        document.getElementById('r2').textContent = "Red 2";
        document.getElementById('r3').textContent = "Red 3";
      }
    })
    .catch(error => console.error(error));
}



const scouterInputs = document.getElementsByName('scouter');
const matchInput = document.getElementsByName('match')[0];

// Add event listeners to all scouter inputs
scouterInputs.forEach(input => {
  input.addEventListener("input", getTeams);
});

// Add event listener to the match input
matchInput.addEventListener("input", getTeams); 

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

  </script>
  