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

if (isset($_POST['kycsubmit'])) {
    $username=$_SESSION['username'];
  $fname = mysqli_real_escape_string($db, $_POST['firstname']);
    $lname = mysqli_real_escape_string($db, $_POST['lastname']);
  $country = mysqli_real_escape_string($db, $_POST['country']);
    $address = mysqli_real_escape_string($db, $_POST['address']);
  $contact = mysqli_real_escape_string($db, $_POST['contact']);
    $aadhar = mysqli_real_escape_string($db, $_POST['aadhar']);

  if (empty($aadhar)) {
    array_push($errors, "Aadhar Number is required");
  }
  if (empty($contact)) {
    array_push($errors, "Contact is required");
  }
    if (empty($address)) {
    array_push($errors, "Address is required");
  }
     if (empty($fname)) {
    array_push($errors, "First Name is required");
  }
    if (empty($lname)) {
    array_push($errors, "Last Name is required");
  }
if (count($errors) == 0) {
  $query = "INSERT INTO kyctable(`username`, `Firstname`, `Lastname`, `address`, `contact`, `aadhar`) VALUES ('$username','$fname','$lname','$address','$contact','$aadhar')";
    mysqli_query($db, $query);
    $query2="UPDATE user SET KYC=1 WHERE Username='$username'";
mysqli_query($db, $query2);
    header('location: customerhomepage.php');
}
    else {
      array_push($errors, "Enter correct details");
    }
}
?>