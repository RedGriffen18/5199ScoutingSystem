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
      $scouter = $_GET["scouter"];
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
      $noshow = $_GET["noshow"];

      $file = fopen("scouting.csv", "a");
      $data = array($name, $match, $scouter, $team, $starting_piece, $starting_lane, $starting_piece1, $starting_piece2, $starting_piece3, $starting_piece4, $gridDataAuto, $pieceData, $chargeAuto, $community, $gridDataTele, $timerValue, $chargeTele, $chargeTotal, $defenseLocations, $defenseSpeed, $defenseDriver, $defenseComments, $funnyComments, $breakButton, $tippingButton, $noshow);
      fputcsv($file, $data);
      fclose($file);
      header("Location: index.php#section1");
      exit();
    }
?>
    <div class="header grid">
        <header id="header" style="display: flex; place-self: center;"></header>
        <img id="team-image" src="" style="display: flex; place-self: center;"/>
    </div>
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
                        <label class="radio block" style="background: gray; color: white; margin: 5%;">
                            <input type="radio" name="scouter" value="r1">
                            <span class="radioPiece" style="background-color: #f03431; border-radius: 20px;"></span>
                            <strong id="r1" style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);">Red&nbsp;1</strong>
                        </label>
                        <label class="radio block" style="background: gray; color: white; margin: 5%;">
                            <input type="radio" name="scouter" value="r2">
                            <span class="radioPiece" style="background-color: #f03431; border-radius: 20px;"></span>
                            <strong id="r2" style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);">Red&nbsp;2</strong>
                        </label>
                        <label class="radio block" style="background: gray; color: white; margin: 5%;">
                            <input type="radio" name="scouter" value="r3">
                            <span class="radioPiece" style="background-color: #f03431; border-radius: 20px;"></span>
                            <strong id="r3" style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);">Red&nbsp;3</strong>
                        </label>
                        <input class="block" type="text" name="name" placeholder="Name" style="grid-column: 4/6; padding: 5%;">
                        <label class="radio block" style="background: gray; color: white; margin: 5%;">
                            <input type="radio" name="scouter" value="b1">
                            <span class="radioPiece" style="background-color: #16478e; border-radius: 20px;"></span>
                            <strong id="b1" style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);">Blue&nbsp;1</strong>
                        </label>
                        <label class="radio block" style="background: gray; color: white; margin: 5%;">
                            <input type="radio" name="scouter" value="b2">
                            <span class="radioPiece" style="background-color: #16478e; border-radius: 20px;"></span>
                            <strong id="b2" style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);">Blue&nbsp;2</strong>
                        </label>
                        <label class="radio block" style="background: gray; color: white; margin: 5%;">
                            <input type="radio" name="scouter" value="b3">
                            <span class="radioPiece" style="background-color: #16478e; border-radius: 20px;"></span>
                            <strong id="b3" style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);">Blue&nbsp;3</strong>
                        </label>
                        <input class="block" type="number" value="" id="match" name="match" autocomplete="off" placeholder="Match #" style="grid-column: 4/6; padding: 5%;" min="0" pattern="[0-9]*">
                        <label class="checkbox block" style="background: gray; color: white; grid-column: 1/4;">
                            <input type="checkbox" name="noshow" value="noshow">
                            <span class="checkboxPiece" style="background-color: black; border-radius: 20px;"></span>
                            <strong style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);">No Show</strong>
                        </label>
                        <input class="block" type="hidden" value="" id="team" name="team" autocomplete="off" placeholder="Team #" style="grid-column: 4/6; padding: 5%;" min="0" pattern="[0-9]*" >

                    </div>
                </div>
                <!--Starting Piece Selection-->
                <div class="block" style="grid-row: 4/6;">
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
                <div class="block" style="grid-row: 4/6; grid-column: 1/4; max-height: 100%; padding: 0; margin: 0; max-width: fit-content;">
                    <strong>Starting Lane and Starting Piece Selection</strong>
                    <p>Select a lane and click to change starting pieces</p>
                    <div class="grid" style="grid-template-rows: repeat(2, 1fr); grid-template-columns: repeat(2, 1fr); width: 100%; max-height: 100%;">
                        <img id="field-icon" src="Icons/5199Icon.png" class="block" style="padding: 0; grid-column: 1/3; grid-row: 1/3; height: auto; max-height: 100%; width: 70%;">
                        <!--Starting Lane-->
                        <div id="FieldDiv1" class="block" style="background: none; padding: 0; height: 0%; width: 32.5%; grid-column: 1; grid-row: 1/3; margin-left: 55%;">
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
                        <div id="FieldDiv2" class="block" style="background: none; padding: 0; height: 0%; width: 25%; grid-column: 2; grid-row: 1/3; margin-left: 54%;">
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
                        <label class="checkbox block" style="background: gray; color: white; margin-top: 5%; grid-column: 1/5;">
                            <input type="checkbox" name="community" value="left">
                            <span class="checkboxPiece" style="background-color: #16478e; border-radius: 20px;"></span>
                            <strong style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);">Left Community</strong>
                        </label>
                    </div>
                </div>
            <!--Auton Pickup-->
                <div class="block" style="grid-row: 4/6;">
                    <strong>Auton Pickup Pieces</strong>
                    <p>Select the pieces that the robot picked up durring auton</p>
                    <div class="grid" style="grid-template-rows: repeat(2, 1fr); grid-template-columns: repeat(1, 1fr); width: 100%; max-height: 100%; height: fit-content;">
                        <label class="checkbox block" style="background: gray; color: white; margin-top: 5%;">
                            <input type="checkbox" name="starting_piece1" value="starting_piece1"> 
                            <span class="checkboxPiece" style="background-color: #16478e; border-radius: 20px;"></span>
                            <img src="Icons/cubeIcon.svg" class="blank" id="blank1">
                        </label>
                        <label class="checkbox block" style="background: gray; color: white; margin-top: 5%;">
                            <input type="checkbox" name="starting_piece2" value="starting_piece2"> 
                            <span class="checkboxPiece" style="background-color: #16478e; border-radius: 20px;"></span>
                            <img src="Icons/cubeIcon.svg" class="blank" id="blank2">
                        </label>
                        <label class="checkbox block" style="background: gray; color: white; margin-top: 5%;">
                            <input type="checkbox" name="starting_piece3" value="starting_piece3"> 
                            <span class="checkboxPiece" style="background-color: #16478e; border-radius: 20px;"></span>
                            <img src="Icons/cubeIcon.svg" class="blank" id="blank3">
                        </label>
                        <label class="checkbox block" style="background: gray; color: white; margin-top: 5%;">
                            <input type="checkbox" name="starting_piece4" value="starting_piece4"> 
                            <span class="checkboxPiece" style="background-color: #16478e; border-radius: 20px;"></span>
                            <img src="Icons/cubeIcon.svg" class="blank" id="blank4">
                        </label>
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
                        <input class="block" id="timerValue" name="timerValue" style="font-size: medium; margin-top: 5%; grid-column: 1/3;" placeholder="Charge Time" pattern="[0-9]*"></input>
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
                    <div class="grid" style="grid-template-columns: repeat(4, 1fr); height: 100%; width: 100%;">
                        <label class="radio block speed-star" id="defenseSpeed1" style="background: gray; color: white; margin-top: 10%;">
                            <input type="radio" name="defenseSpeed" value="1"> 
                            <span class="radioPiece" style="background-color: #16478e; border-radius: 20px;"></span>
                            <img src="Icons/starIcon.svg" class="blank" style="width: auto; height: 100%; filter: invert(100%);">
                        </label>
                        <label class="radio block speed-star" id="defenseSpeed2" style="background: gray; color: white; margin-top: 10%;">
                            <input type="radio" name="defenseSpeed" value="2"> 
                            <span class="radioPiece" style="background-color: #16478e; border-radius: 20px;"></span>
                            <img src="Icons/starIcon.svg" class="blank" style="width: auto; height: 100%; filter: invert(100%);">
                        </label>
                        <label class="radio block speed-star" id="defenseSpeed3" style="background: gray; color: white; margin-top: 10%;">
                            <input type="radio" name="defenseSpeed" value="3"> 
                            <span class="radioPiece" style="background-color: #16478e; border-radius: 20px;"></span>
                            <img src="Icons/starIcon.svg" class="blank" style="width: auto; height: 100%; filter: invert(100%);">
                        </label>
                        <label class="radio block speed-star" id="defenseSpeed4" style="background: gray; color: white; margin-top: 10%;">
                            <input type="radio" name="defenseSpeed" value="4"> 
                            <span class="radioPiece" style="background-color: #16478e; border-radius: 20px;"></span>
                            <img src="Icons/starIcon.svg" class="blank" style="width: auto; height: 100%; filter: invert(100%);">
                        </label>
                    </div>
                </div>
                <!--Defense Driver Rating-->
                <div class="block">
                    <strong >Driver Rating</strong>
                    <div class="grid" style="grid-template-columns: repeat(4, 1fr); height: 100%; width: 100%;">
                        <label class="radio block defense-star" id="defenseDriver1" style="background: gray; color: white; margin-top: 10%;">
                            <input type="radio" name="defenseDriver" value="1"> 
                            <span class="radioPiece" style="background-color: #16478e; border-radius: 20px;"></span>
                            <img src="Icons/starIcon.svg" class="blank" style="width: auto; height: 100%; filter: invert(100%);">
                        </label>
                        <label class="radio block defense-star" id="defenseDriver2" style="background: gray; color: white; margin-top: 10%;">
                            <input type="radio" name="defenseDriver" value="2"> 
                            <span class="radioPiece" style="background-color: #16478e; border-radius: 20px;"></span>
                            <img src="Icons/starIcon.svg" class="blank" style="width: auto; height: 100%; filter: invert(100%);">
                        </label>
                        <label class="radio block defense-star" id="defenseDriver3" style="background: gray; color: white; margin-top: 10%;">
                            <input type="radio" name="defenseDriver" value="3"> 
                            <span class="radioPiece" style="background-color: #16478e; border-radius: 20px;"></span>
                            <img src="Icons/starIcon.svg" class="blank" style="width: auto; height: 100%; filter: invert(100%);">
                        </label>
                        <label class="radio block defense-star" id="defenseDriver4" style="background: gray; color: white; margin-top: 10%;">
                            <input type="radio" name="defenseDriver" value="4"> 
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
        const eventKey = "2023azgl";
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
</script>
