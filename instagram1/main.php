<!DOCTYPE html>
<html lang="en">
<head>
    <title>Instagram | Log In And Sign up</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>   
       body{
        overflow-x: hidden;
        background-color:lightgrey;
       }
       #centered1{
         position: absolute;
         font-size: 10vw;
         top: 30%;
         left: 20%;
         transform: translate(-50%, -50%);
       }
       #centered2{
         position: absolute;
         font-size: 10vw;
         top: 40%;
         left: 22%;
         transform: translate(-50%, -50%);
       }
       #centered3{
         position: absolute;
         font-size: 10vw;
         top: 50%;
         left: 39%;
         transform: translate(-50%, -50%);
       }
       #signup{
        width: 60%;
        border-radius: 30px;
        background-image: url('gradient color.png');
        border: 1px solid black;
       }
       #signup:hover{
        background-image: url('black.jpg');
        border: 2px solid red;
       }
       #login{
        width: 60%;
        background-image: url('gradient color.png');
        border: 1px solid black;
        border-radius: 30px;
       }
       #login:hover{
        width: 60%;
        background-image: url('black.jpg');
        border: 2px solid red;
        border-radius: 30px;
       }
       .well{
        background-image: url('gradient color.png');
        background-repeat:no-repeat;
        background-attachment:fixed;
        background-size:100% 100%;
        width:100%;
        padding:0px;
        
       }
       .box{
            position:relative;
            width: 600px;
            height:100px;
            display:flex;
            justify-content: center;
            align-items: center;
            left:-25%;
        }
        .box h2 {
            color:#fff;
            font-size: 1.7em;
            font-weight: 600;
            letter-spacing: 0.1em;
            text-shadow: 0 0 10px #00b3ff,
                        0 0 20px #00b3ff,
                        0 0 40px #00b3ff,
                        0 0 80px #00b3ff,
                        0 0 120px #00b3ff;
        }
        .lightbar {
            position: absolute;
            top:0;
            left:0;
            width: 10px;
            height: 100%;
            border-radius: 10px;
            background: #fff;
            z-index:2;
            box-shadow: 0 0 10px #00b3ff,
                        0 0 20px #00b3ff,
                        0 0 40px #00b3ff,
                        0 0 80px #00b3ff,
                        0 0 120px #00b3ff;
            animation: animatelightbar 5s linear infinite;
        }
        @keyframes animatelightbar
        {
            0%,5%
            {
                transform: scaleY(0) translateX(0);
            }
            10%
            {
                transform: scaleY(1) translateX(0);
            }
            90%
            {
                transform: scaleY(1) translateX(calc(600px -
                10px));
            }
            95%,100%
            {
                transform: scaleY(0) translateX(calc(600px -
                10px));
            }
        }
        .topLayer{
            
            position: absolute;
            top:0;
            left:0;
            width: 100%;
            height: 100%;
            background:;
            animation: animatetopLayer 10s linear infinite;
        }
        @keyframes animatetopLayer
        {
            0%,2.5%
            {
                transform:  translateX(0);
            }
            5%
            {
                transform:  translateX(0);
            }
            45%
            {
                transform:  translateX(100%);
                
            }
            47.5%,50%
            {
                transform:  translateX(100%);
            }

           50.001%,52.5%
            {
                transform:  translateX(-100%);
            }
            55%
            {
                transform:  translateX(-100%);
            }
            95%
            {
                transform:  translateX(0%);
                
            }
            97.5%,100%
            {
                transform:  translateX(0%);
            }
        }
</style>
<body>
    <div class="row">
        <div class="col-sm-12">
            <div class="well">
                <center><h1 style="color: black;font-family: 'Arial Narrow Bold',revert-layer;">
                INSTAGRAM</h1></center>

            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-sm-6" style="left: 2.5%;font-family: initial;">
            <img src="images/gradient color.png" class="img-rounded" title="gradient color" width="70px" height="500x" border-radius="60%";>
            <img src="images/3.jpg" class="img-rounded" title="gradient color" width="400px" height="500x" border-radius="50%";>
            <img src="images/gradient color.png" class="img-rounded" title="gradient color" width="71px" height="500x" border-radius="50%";>
            <div id="centered1" class="centered"><h3 style="color: black;"><span class=""></span>&nbsp&nbsp<strong>Engage.</strong></h3></div>
            <div id="centered2" class="centered"><h3 style="color: black;"><span class=""></span>&nbsp&nbsp<strong>Encourage.</strong></h3></div>
            <div id="centered3" class="centered"><h3 style="color: black;"><span class=""></span>&nbsp&nbsp<strong>and Specially...Just be your self.</strong></h3></div>
        </div>
        <div class="col-sm-6" style="left: 13%;font-family: initial">
            <img src="images/cover2.jpg" class="img-rounded" title="gradient color" width="80px" height="80px">
            <div class="box">
        <div class="lightbar"></div>
        <div class="topLayer"></div>
            <h2><strong>We're Changing the<br> world with technology.</strong></h2><br><br>
      </div>
            <h4><strong>Join! and have fun.</strong></h4>
            <form method="post" action="">
                <button id="signup" class="btn btn-info btn-lg" name="signup">Sign Up</button><br><br>
              <?php
              if(isset($_POST['signup'])){
                echo "<script>window.open('signup.php','_self')</script>";
              }
              ?>
                <button id="login" class="btn btn-info btn-lg" name="login">Log in</button><br><br>
                <?php
              if(isset($_POST['login'])){
                echo "<script>window.open('signin.php','_self')</script>";
              }
              ?>
              </form>
        </div>
    </div>  
</body>
</html>