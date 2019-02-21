<?php


    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 


$username="";
$password="";
$errors = array();

$db=mysqli_connect('localhost','sindhu','qazwsxedcrfvtgbyhnujmikolp','Cabhiringdb');
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

if (isset($_POST['regis'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password_1']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM user WHERE Username='$username' AND Password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
     header('location: customerhomepage.php');
    }
      else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}
?>