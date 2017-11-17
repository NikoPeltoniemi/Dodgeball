<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dodgeball</title>
    <style>
        body{
            display: flex;
            min-height: 100vh;
            align-content: center;
            margin: 0;
        }
        #app{
            margin: auto;
            width: 800px;
            height: 600px;
            background-color: #999;
            position: relative;
            overflow: hidden;
            cursor: url('images/crosshairs.png') 32 32, auto;
        }
        #app .startscreen{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(0,0,0,0.3);
            z-index: 9999;
        }
        #app .endscreen{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background: rgba(0,0,0,0.3);
            z-index: 9999;
            color: #fff;
        }
        #app .startbutton{
            background: #000;
            color: #fff;
            padding: 70px;
        }
        #app .ground{
            position: absolute;
            top: 0;
            left: 0;
            pointer-events: none;
        }
        #app .target{
            position: absolute;
        }
        #app #layer-1 .target{
            bottom: 15%;
        }
        #app #layer-2 .target{
            bottom: 35%;
        }
        #app #layer-3 .target{
            bottom: 50%;
        }
        #app .target{
            transform: rotateX(90deg);
            transform-origin: bottom;
            -webkit-transition: transform 300ms linear;
            -moz-transition: transform 300ms linear;
            transition: transform 300ms linear;
        }
        #app .show{
            -webkit-transition: transform 300ms linear;
            -moz-transition: transform 300ms linear;
            transition: transform 300ms linear;
            transform: rotateX(0deg);
            transform-origin: bottom;
        }
        #app #t9{
            left: 80%;
        }
        #app #t8{
            left: 50%;
        }
        #app #t7{
            left: 20%;
        }
        #app #t6{
            left: 70%;
        }
        #app #t5{
            left: 40%;
        }
        #app #t4{
            left: 10%;
        }
        #app #t3{
            left: 90%;
        }
        #app #t2{
            left: 60%;
        }
        #app #t1{
            left: 30%;
        }
        #ball{
            position: absolute;
            top: 500px;
            left: 700px;
            width: 100px;
            height: 100px;
            transition: left .5s linear, 
			top .5s linear;
        }
    </style>
</head>
<body>
    <div id="app">
        <div class="startscreen">
            <a class="startbutton">Start</a>
        </div>
        <div class="endscreen" style="display:none;">
            <h2>Game over</h2>
            <a class="startbutton">Restart</a>
        </div>
        <div class="score">
            Score: <span id="score"></span>
        </div>
        <div class="lives">
            Lives: <span id="lives"></span>
        </div>
        <div id="layer-3" class="layer">
            <img src="images/target.png" id="t1" class="target">
            <img src="images/target.png" id="t2" class="target">
            <img src="images/target.png" id="t3" class="target">
            <img src="images/back1.png" id="b1" class="ground">
        </div>
        <div id="layer-2" class="layer">
            <img src="images/target.png" id="t4" class="target">
            <img src="images/target.png" id="t5" class="target">
            <img src="images/target.png" id="t6" class="target">
            <img src="images/back2.png" id="b2" class="ground">
        </div>
        <div id="layer-1" class="layer">
            <img src="images/target.png" id="t7" class="target">
            <img src="images/target.png" id="t8" class="target">
            <img src="images/target.png" id="t9" class="target">
            <img src="images/back3.png" id="b3" class="ground">
        </div>
        <div class="ball-container">
            <img src="images/ball.png" id="ball">
        </div>
    </div>
    <script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
    <script src="index.js"></script>
</body>
</html>