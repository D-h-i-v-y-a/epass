<?php
	
	$reason=$_POST['reason'];
	$states=$_POST['states'];
	$dateoftravel=$_POST['dateoftravel'];
	$district1=$_POST['district1'];
	$street1=$_POST['street1'];
	$house1=$_POST['house1'];
    $pincode1=$_POST['pincode1'];
    $district2=$_POST['district2'];
	$street2=$_POST['street2'];
	$house2=$_POST['house2'];
    $pincode2=$_POST['pincode2'];
    $vehicletype=$_POST['vehicletype'];
    $vehiclenumber=$_POST['vehiclenumber'];
	
	
	$conn=new mysqli('localhost','root','','t1epass');
	if($conn->connect_error)
	{
		die('Error:('.$conn->connect_errno.')'.$conn->connect_error);
	}
	
	
	else
		{
			
		$stmt = $conn->query("insert into  traveldetail(reason,states,dateoftravel,district1,street1,house1,pincode1,district2,street2,house2,pincode2,vehicletype,vehiclenumber) values('$reason','$states','$dateoftravel','$district1','$street1','$house1','$pincode1','$district2','$street2','$house2','$pincode2','$vehicletype','$vehiclenumber')");
		
		
		if($stmt)
		{
			
			header("location:fproof.html");
		}
		
	}
?>