<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Signin</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
      body{
        overflow: hidden;
        background-color:lightgrey;
      }
      .main-content{
    width: 40%;
    height: 40%;
    margin: 10px auto;
    background-color: #fff;
    border: 2px solid ;
    padding: 40px 50px;
    border-radius: 50px 5px ;
  }
  .header{
    border: 0px solid #000;
    margin-bottom: 5px;
  }
  .well{
        background-image: url('gradient color.png');
        background-repeat:no-repeat;
        background-attachment:fixed;
        background-size:100% 100%;
        width:100%;
        padding:0px
  }
  #signin{
    width: 60% ;
    border-radius: 30px;
    background-image: url('gradient color.png');
        border: 1px solid #1da1f2;
  }
   #signin:hover{
        width: 60%;
        background-image: url('black.jpg');
        border: 2px solid #1da1f2;
        border-radius: 30px;
       }
  .overlap-text{
    position: relative;
  }
  .overlap-text a{
    position: absolute;
    top: 8px;
    right: 10px;
    font-size: 14px;
    text-decoration: none;
    font-family: 'Overpass Mono', monospace;
    letter-spacing: -1px;
  }

</style>
<body>
    <div class="row">
        <div class="col-sm-12">
            <div class="well">
                <center><h1 style="color: black;font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">INSTAGRAM</h1></center>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="main-content">
                <div class="header">
                    <h3 style="text-align: center; font-family: Impact, Haettenschweiler, , sans-serif;"><strong>LOG IN TO INSTAGRAM</strong></h3>
                    
                </div>
                <div class="l-part">
                    <form action="" method="post">
                        <input type="email" name="email" placeholder="Email" required="required" class="form-control input-md"><br>
                        <div class="overlap-text">
                            <input type="password" name="pass" placeholder="Password"
                            required ="required" class="form-control input-md"><br>
                            <a style="text-decoration: none;float: right;color: blue;"
                            data-toggle="tooltip" title="Reset Password" href="forgot_password.php">Forgot</a>
</div>
                                <a style="text-decoration: none;float: right;color: blue;"
                                data-toggle="tooltip" title="Create Acount" href="signup.php">Dont Have an account?</a><br><br>
                                <center><button id="signin" class="btn btn-info btn-lg" name="login">login</button></center>
                            <?php include("login.php"); ?>
                     
                            </form>
                            </div>
                        </div>                   
                </div>

            </div>

        </div>

    </div>
    
</body>
</html>