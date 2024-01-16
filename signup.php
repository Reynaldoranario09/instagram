<!DOCTYPE html>
<html lang="en">
<head>
    <title>INSTAGRAM</title>
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
  #signup{
        width: 60%;
        border-radius: 30px;
        background-image: url('gradient color.png');
       }
#signup:hover{
        background-image: url('black.jpg');
       }
       
</style>
<body>
  <div class="row">
    <div class="col-sm-12">
        <div class="well">
            <center><h1 style="color: black; font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">INSTAGRAM</h1></center>
        </div>
    </div>
</div>
<div class="row">
  <div class="col-sm-12">
    <div class="main-content">
      <div class="header">
        <h3 style="text-align: center; font-family: Impact, Haettenschweiler, , sans-serif;"><strong>Create Your Account!</strong></h3><hr>
      </div> 
      <div class="l-part">
        <form action="" method="post">
           <div class="input-group">
              <span class="input-group-addon"><i class=""></i></span>
              <input type="text" class="form-control" placeholder="First Name"
              name="first_name" required="required">
           </div><br>
           <div class="input-group">
            <span class="input-group-addon"><i class=""></i></span>
            <input type="text" class="form-control" placeholder="Last Name"
            name="last_name" required="required">
         </div><br>
         <div class="input-group">
          <span class="input-group-addon"><i class=""></i></span>
          <input id="password" type="password" class="form-control" placeholder="password"
          name="u_pass" required="required">
       </div><br>
       <div class="input-group">
      <span class="input-group-addon"><i class=""></i></span>
      <select class="form-control" name="Relationship_status" required="required">
        <option disabled>Your Status:</option>
        <option >Single</option>
        <option >Married</option>
        <option >Divorce</option>
        <option >Friends</option>
         </select>
       </div><br>
       <div class="input-group">
        <span class="input-group-addon"><i class=""></i></span>
        <input id="email" type="email" class="form-control" placeholder="Email"
        name="u_email" required="required">
     </div><br>
     <div class="input-group">
      <span class="input-group-addon"><i class=""></i></span>
      <select class="form-control" name="u_country" required="required">
        <option disabled>Select your Place</option>
        <option >Alegria</option>
        <option >Kitcharao</option>
        <option >Bacuag</option> 
        <option >Gigaquit</option> 
        <option >Claver</option>
        <option >Carrascal</option>
        <option >Cantilan</option>
        <option >Madrid</option>
        <option >Carmen</option>
        <option >Lanuza</option>
        <option >Cortes</option>
        <option >Tandag</option>
        <option >Butuan</option>
        <option >Bayabas</option>
        <option >Cagwait</option>
        <option >Tago</option>
        <option >San Agustin</option>
        <option >Lianga</option>
        <option >Bayugan City</option>      
         </select>
       </div><br>
       <div class="input-group">
        <span class="input-group-addon"><i class=""></i></span>
        <select class="form-control input-md" name="u_gender" required="required">
          <option disabled>Select your Gender</option>
          <option >Male</option>
          <option >Female</option>
          <option >Others</option>
           </select>
         </div><br>
    
         <div class="input-group">
          <span class="input-group-addon"><i class=""></i></span>
          <input type="date" class="form-control input-md" placeholder="Email"
          name="u_birthday" required="required">
       </div><br>
       <a style="text-decoration: none;float: right;color:blue ;" data-toggle="toolip" title="Signin" href="signin.php">Already have an account</a><br<<br>
       <center><button id="signup" class="btn btn-info btn-lg" name="sign_up">Signup</button></center>
       <a style="float:right; color:blue;" href="main.php">Back</a>
       <?php include("insert_user.php"); ?>
       
        </form>
      </div>
    </div>

  </div>

</div>
</body>
</html>