<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
            .tribot
            {
                margin-top: 350px;
            }
            body
            {
               background-color: #0E0A09;
            }
            .desig
            {
                float: right;
                width: 200px;
                height: max-content;
            }
            .mai
            {
                float: left;
            }
            .head1r
            {
            float: right;
            word-spacing: 70px;
            margin-top: 60px;
            margin-left: 580px;
            }
            .head1
            {
            float: left;
            width: 500px;
            }
            .sect
            {
                display: inline-flex;
                height: 550px;
            }
            .headm
            {
                color: aliceblue;
                margin-left: 180px;
                line-height: 3px;
                font-size: x-large;
                font-family: Georgia;
                width: 400px;
                margin-top: 50px;
            }
            .head1 a{
                text-decoration: none;
                color: white;
                position: relative;
            }
            .head1 a::after{
                content: '';
                background: orangered;
                width: 2;
                height: 2px;
                position: absolute;
                left: 0;
                right: 10;
                bottom: 0;
                transition: wdith 0.5s;
            }
            .head1 a:hover::after{
                width: 100%;
            }
            .head1r a{
                text-decoration: none;
                color: white;
                position: relative;
            }
            .head1r a::after{
                content: '';
                background: orangered;
                width: 2;
                height: 2px;
                position: absolute;
                left: 0;
                right: 10;
                bottom: 0;
                transition: wdith 0.5s;
            }
            .head1r a:hover::after{
                width: 100%;
            }
    </style>
</head>
<body>
    <div>
        <div class="desig">
            <svg width="200" height="200" class="tritop">
                <polygon points="0, 0, 200, 200, 200, 0" fill="#A69D52" />
            </svg>
            <svg width="200" height="200" class="tribot">
                <polygon points="200, 200, 100, 200, 200, 0" fill="#A69D52" />
            </svg>
        </div>
        <div class="mai">
            <div class="heads">
                <div class="head1">
                    <img src="acos.jpg" alt="Logo" height="70px">
                    <a href="home.php" class="anch1" style="font-size: 22px;">HOME</a>
                    <a href="AboutPage.html" class="anch1" style="font-size: 22px; padding-left: 20px;">ABOUT</a>
                    <a href="" class="anch1" style="font-size: 22px; padding-left: 20px;">CONTACT</a>
                </div>
                <div class="head1r">
                    <a href="login.php" class="anch2" style="font-size: 22px;">LOGIN</a>
                    <a href="signup.php" class="anch2" style="font-size: 22px;">SIGNUP</a>
                </div>
            </div>
            <div class="sect">
                <div class="hsect">
                    <img src="food.jpg" alt="Food" height="742px">
                </div>
                <div class="headm">
                    <h1>AUTOMATED</h1><br>
                    <h1>CANTEEN</h1><br>
                    <h1>ORDERING</h1><br>
                    <h1>SYSTEM</h1><br>
                    <br>
                    <h2 style="color: darkgrey;">ACOS</h2><br>
                    <h5 style="line-height: 25px; font-size:small;">"Don't let the small stuff hold you back;<br>why waste a minute on minute details that<br>steal your time?"</h5>
                </div>
                <div class="lens">
                    <img src="Capture.JPG" alt="Lens" height="200px" style="padding-left: 90px; margin-top: 120px;" usemap="#scan">
                    <map name="scan">
                        <area shape="rect" coords="13,12,228,226" href="https://qrcodescan.in/" alt="Scanner" target="_blank">
                    </map>
                </div>

        </div>
    </div>
</body>
</html>