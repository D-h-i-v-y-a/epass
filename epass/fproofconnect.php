<?php

	$idproof= $_POST['idproof'];
  $idnumber= $_POST['idnumber'];
  $idfile = $_POST['idfile'];
	
	
	$conn=new mysqli('localhost','root','','t1epass');
	if($conn->connect_error)
	{
		die('Error:('.$conn->connect_errno.')'.$conn->connect_error);
	}
	
	

	else
		{
		$stmt= $conn->query("insert into proofdetail(idproof,idnumber,idfile) values('$idproof','$idnumber','$idfile')");
		
		if($stmt)
		{
			
			header("location:copassenger.html");
		}
		
	}
?>