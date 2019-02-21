<?php

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 


$username="";
$email="";
$name="";
$mmobile="";
$dob="";
$password_1="";
$password_2="";
$mobile="";
$errors = array();

$db=mysqli_connect('localhost','sindhu','qazwsxedcrfvtgbyhnujmikolp','Cabhiringdb');
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
if(isset($_POST['register']))
{
	$username=mysqli_real_escape_string($db,$_POST['username']);
    $name=mysqli_real_escape_string($db,$_POST['name']);
	$email=mysqli_real_escape_string($db,$_POST['email']);
	$password_1=mysqli_real_escape_string($db,$_POST['password_1']);
	$password_2=mysqli_real_escape_string($db,$_POST['password_2']);
    $mmobile=mysqli_real_escape_string($db,$_POST['mobile']);
    $dob=mysqli_real_escape_string($db,$_POST['dob']);
	if(empty($username)){
		array_push($errors, "Username is required!");
	}
	if(empty($email)){
		array_push($errors, "Email is required!");
	}
    if(empty($name)){
		array_push($errors, "Name is required!");
	}
    if(empty($mmobile)){
		array_push($errors, "Mobile Number is required!");
	}
    if(empty($dob)){
		array_push($errors, "Date of Birth is required!");
	}
	if(empty($password_1)){
		array_push($errors, "Password is required!");
	}
	if($password_1!=$password_2)
	{
		array_push($errors, "Your passwords do not match!");
	}

	if(count($errors)==0)
	{
		$password=md5($password_1);
        $mobile=md5($mmobile);
		$sql="INSERT INTO `user`(`Name`, `Mobile`, `Username`, `Password`, `DOB`, `Email`) VALUES ('$name','$mobile','$username','$password','$dob','$email')";
		mysqli_query($db,$sql);
		$_SESSION['username']=$username;
		$_SESSION['success']="You are now successfully logged in";
		header('location: customerloginsignup.php');
		
	}


}
?>