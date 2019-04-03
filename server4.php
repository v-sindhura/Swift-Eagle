<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
$promo="";
$title="";
$description="";
$expires="";
$imgaddress="";
$errors = array();
$db=mysqli_connect('localhost','sindhu','qazwsxedcrfvtgbyhnujmikolp','Cabhiringdb');
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
if(isset($_POST['regbutton']))
{
	$promo=mysqli_real_escape_string($db,$_POST['promo']);
    $title=mysqli_real_escape_string($db,$_POST['title']);
	$description=mysqli_real_escape_string($db,$_POST['description']);
	$expires=mysqli_real_escape_string($db,$_POST['expires']);
	$imgaddress=mysqli_real_escape_string($db,$_POST['imgaddress']);

	if(empty($promo)){
		array_push($errors, "Promo code is required!");
	}
	if(empty($title)){
		array_push($errors, "Title is required!");
	}
    if(empty($description)){
		array_push($errors, "description about the promo code is required!");
	}
    if(empty($expires)){
		array_push($errors, "information about the validation of promo code is required!");
	}
        if(empty($imgaddress)){
		array_push($errors, "image adress  is required!");
	}
	if(count($errors)==0)
	{
		$sql="INSERT INTO `promocodes`(`promo`, `title`, `description`, `expires`,`imgaddress`) VALUES ('$promo','$title','$description','$expires','$imgaddress')";
		mysqli_query($db,$sql);
		header('location: offers.php');
		
	}
    else{
        array_push($errors, "Wrong details!");
    }
}
?>