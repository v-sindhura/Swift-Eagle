<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
$promoname="";
$reason="";
$errors = array();
$db=mysqli_connect('localhost','sindhu','qazwsxedcrfvtgbyhnujmikolp','Cabhiringdb');
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
if(isset($_POST['registerbtn']))
{
	$promoname=mysqli_real_escape_string($db,$_POST['promoname']);
    $reason=mysqli_real_escape_string($db,$_POST['reason']);

	if(empty($promoname)){
		array_push($errors, "Promo code is required!");
	}
	if(count($errors)==0)
	{
		$sql="DELETE FROM `promocodes` WHERE promo='$promoname'";
		if (mysqli_query($db, $sql)) {
    echo "Record deleted successfully";
}

		
	}
    else{
        array_push($errors, "Wrong details!");
    }
}
?>
