<!DOCTYPE html>
<?php
session_start();
include("includes/header.php");

if(!isset($_SESSION['user_email'])){
    header("location: index.php");
}
?>
<html lang="en">
<head>
  
    <title>Find People</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style/home_style2.css">
</head>
<style>
.btn-info{
    color:white;
    background-color:black;
    height:40px;
    width:90px;
    border-color:red;
}
.btn-info:hover{
    color: black;
  background-color: #fff;
  border-color: black;
}
.search_form{
    height:50px;
    line-height:33px;
    text-align:center;
}
h2{
    color: black;
    font-size:25px;
    font-family: initial;
}
img{
    border-radius:140px;
}
#find_people {
  border: 5px solid blue;
  padding: 40px 50px;
}
</style>
<body>  
    <div class="row">
    <div class="col-sm-12">
        <center><h2 style='font-size:35px;'>FIND NEW PEOPLE</h2></center><br><br>
        <div class="row">
            <div class="col-sm-4">
            </div>
            <div class="col-sm-4">
                <form class="search_form" action="">
                    <input type="text" placeholder="Search Friend" name="search_user">
                    <button class="btn btn-info" type="submit" name="search_user_btn">Search</button>
                </form>
            </div>
            <div class="col-sm-4">
            </div>
        </div><br><br>
        <?php search_user(); ?>
    </div>
</div>   
</body>
</html>