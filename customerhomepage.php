<!DOCTYPE html>
<?php 
session_start();
if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: form.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: customerloginsignup.php");
  }
include('server2.php');
include('server1.php'); 
?>
<html>
<head>
    <title>Cab Hiring</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style>
        html {
  box-sizing: border-box;
}
        body{
            background-color: #102951;
        }
   .img1{ 
        position: absolute;
        height: 400px;
        width: 100%; 
        margin-top: 0; padding-top: 0; 
        background-size: cover;
        background-color: white;
        opacity: 0.9;
        }
        h1{
           position: absolute;
            top: 160px;
            left: 450px;
            font-size: 80px;
            font-family:sans-serif cursive;
            font-weight: 600;
            color: white;
        }
        h2{
            position: absolute;
            left: 700px;
            top: 300px;
            font-family: Brush Script MT, Brush Script Std, cursive;
            font-size: 50px;
            color: white;
        }
        ul {
            list-style-type:none;
            margin: 0;
            padding: 0;
            display: block;
            
        }
        .active {
            background-color: red;
            color: white;
        }
        .navbar{
            background-color: #333;
  overflow: hidden;
            top: 400px;
            width: 100%;
        }
        .navbar a{
            float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 30px;
  text-decoration: none;
  font-size: 17px;
            float: right;
        }
        .navbar a:hover {
  background-color: #ddd;
  color: black;
}
        .Hee{
            font-family: Avantgarde, TeX Gyre Adventor, URW Gothic L, sans-serif;
            font-weight: 900;
            position: absolute;
            top: 480px;
            font-size: 50px;
            color: white;
        }
        .Logo{
            width: 150px;
            height: 150px;
            border-radius: 50%;
            position: absolute;
            top: 40px;
            left:600px;
            
            
        }
        .Hohoho{
            position: absolute;
            top:600px;
            width: 800px;
            height: 900px;
            background-image: url("data:image/jpeg;base64,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");
            background-position: center;
            background-color: #cccccc; /* Used if the image is unavailable */
            background-repeat: no-repeat; /* Do not repeat the image */
            background-size: cover;
            left: 20%;
            position: absolute;
            transform: translate(-50% -50%);
            box-sizing: border-box;
            padding: 70px 30px;
            border-radius: 50px;
            
        }
        .Hohoho input[type="text"]
        {
            border: none;
            border-bottom: 1px solid #fff;
            background-color: white;
            outline: none;
            height: 60px;
            width: 600px;
            color: #fff;
            font-size: 16px;
            border-radius: 30px;
            padding: 40px;
        }
        .Hohoho input[type="submit"]:hover
        {
            cursor: grabbing;
            background: #ffc107;
            color: #000;
        }
        .Hohoho input[type="date"]
        {
            border: none;
            border-bottom: 1px solid #fff;
            background-color: white;
            font-size: 20px;
            border-radius: 30px;
            padding: 10px;
        }
        .Hohoho a
        {
            text-decoration: none;
            font-size: 12px;
            line-height: 20px;
            color: white;
        }
        .Hohoho a:hover
        {
            color: #ffc107;
        }
             .headings{
            font-size: 80px;
            color:black;
            padding: 10px;
            position: absolute;
            top: 10%;
            left: 480px;
        }
        .Hohoho input[type="submit"]
        {
            border: none;
            outline: none;
            height: 60px;
            width: 200px;
            background-color: darkgrey;
            color: white;
            font-size: 18px;
            border-radius: 20px;
        }
        .Hohoho p
        {
            margin: 0;
            padding: 0;
            font-weight: bold;
            color: white;
        }
        .Hohoho select{
            padding: 10px;
            width: 600px;
            border-radius: 20px;
            
        }
       
    </style>
</head>
<body>
    
    <img class="img1" src="data:image/jpeg;base64,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" alt="Cab Hiring" >
    <h1>Swift Eagle</h1>
    <h2>We drive people happy!...!!!</h2>
    <img class="Logo" src="https://i.pinimg.com/originals/cb/0c/ac/cb0cacfe6909654f077e0423a3c227ab.jpg">
    <nav class="navbar">
        <ul>
            <li><a href="customerlogin.php">Logout</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a  href="kyc.php">Update Profile</a></li>
            <li><a href="wallet.php" class="butt">Wallet</a></li>
  <li><a href="offers.php" class="butt">Special Offer</a></li>
  <li><a href="#" class="butt">History</a></li>
            <li><a class="active" href="#" class="butt">Home</a></li>
        </ul>
</nav>
    <p class="Hee">
    Hello <?php echo $_SESSION['username']."!!"; ?>
    </p>
    <div class="Hohoho">
    <form method="post" action="customerlogin.php">
        <p>Choose your car!</p><br><br>
        <select>
            <option value"" name="typeofcar">Choose a car</option>
  <option value="sedan">Sedan</option>
  <option value="compact">Compact</option>
  <option value="share">Share</option>
</select><br><br>
        <p>Enter Pickup Location</p><br>
            <input type="text" name="pickup" placeholder="Enter Pickup Location" value="">
        <br><br><p>Enter Drop Location</p><br>
            <input type="text" name="drop" placeholder="Enter Drop Location">
        <br>
        <br><br><p>Enter Date</p><br>
            <input type="date" name="date" placeholder="Enter date">
        <br>
        <br><br><p>Enter Promo Code</p><br>
            <input type="text" name="promo" placeholder="Enter PROMO CODE if applicable">
        <br>
        <br>
            <input type="submit" name="search" value="Search"><br>
            <a href="#">Haven't Updated KYC yet?</a><br>
    </form>
    </div>
   
</body>
</html>
