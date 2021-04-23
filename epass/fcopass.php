<?php

	$cpname=$_POST['cpname'];
	$cpage=$_POST['cpage'];
	$gender=$_POST['gender'];
	$cpadharnumber=$_POST['cpadharnumber'];
    $cpname1=$_POST['cpname1'];
	$cpage1=$_POST['cpage1'];
	$gender1=$_POST['gender1'];
	$cpadharnumber1=$_POST['cpadharnumber1'];
    $cpname2=$_POST['cpname2'];
	$cpage2=$_POST['cpage2'];
	$gender2=$_POST['gender2'];
	$cpadharnumber2=$_POST['cpadharnumber2'];

	
	$conn=new mysqli('localhost','root','','t1epass');
	if($conn->connect_error)
	{
		die('Error:('.$conn->connect_errno.')'.$conn->connect_error);
	}
	else
	{
		$stmt = $conn->query("INSERT INTO copassengerdetails(cpname,cpage,gender,cpadharnumber,cpname1,cpage1,gender1,cpadharnumber1,cpname2,cpage2,gender2,cpadharnumber2) VALUES ('$cpname','$cpage','$gender','$cpadharnumber','$cpname1','$cpage1','$gender1','$cpadharnumber1','$cpname2','$cpage2','$gender2','$cpadharnumber2')");
		//$conn->close();
		if($stmt)
		{
			
			header("location:fsuccess.php");
		}
		
	}
	?>