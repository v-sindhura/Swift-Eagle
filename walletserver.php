<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: form.php');
  }
include('server1.php');
$db=mysqli_connect('localhost','sindhu','qazwsxedcrfvtgbyhnujmikolp','Cabhiringdb');
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
if (isset($_POST['walletsubmit'])) {
    $username=$_SESSION['username'];
  $fname = mysqli_real_escape_string($db, $_POST['fullname']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
  $city = mysqli_real_escape_string($db, $_POST['city']);
    $adr = mysqli_real_escape_string($db, $_POST['adr']);
  $cardname = mysqli_real_escape_string($db, $_POST['cardname']);
     $expmonth = mysqli_real_escape_string($db, $_POST['expmonth']);
     $expyear = mysqli_real_escape_string($db, $_POST['expyear']);
    $cvv = mysqli_real_escape_string($db, $_POST['cvv']);
  if (empty($cvv)) {
    array_push($errors, "cvv Number is required");
  }
  if (empty($expyear)) {
    array_push($errors, "expiryyear is required");
  }
     if (empty($expmonth)) {
    array_push($errors, "expirymonth is required");
  }
    if (empty($adr)) {
    array_push($errors, "Address is required");
  }
    if (empty($city)) {
    array_push($errors, "city is required");
  }
     if (empty($fname)) {
    array_push($errors, "Full Name is required");
  }
    if (empty($email)) {
    array_push($errors, "Email is required");
  }
if (count($errors) == 0) {
  $query = "INSERT INTO kyctable( `Fullname`, `email`, `address`, `city`, `cardname`,`expmonth`,`expyear`,'cvv') VALUES ('$fname','$email','$adr','$city','$cardname','$expmonth','$expyear','$cvv')";
    mysqli_query($db, $query);
    $query2="UPDATE user SET wallet=1 WHERE Username='$fname'";
mysqli_query($db, $query2);
    header('location: customerhomepage.php');
}
    else {
      array_push($errors, "Enter correct details");
    }
}
?>