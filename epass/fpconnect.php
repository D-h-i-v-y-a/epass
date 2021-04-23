<?php
	$namee=$_POST['namee'];
	$fathername=$_POST['fathername'];
	$spousename=$_POST['spousename'];
	$gender=$_POST['gender'];
	$age=$_POST['age'];
	$phonenumber=$_POST['phonenumber'];
	$caddress=$_POST['caddress'];
	$noofpassengers=$_POST['noofpassengers'];
	
	$conn=new mysqli('localhost','root','','t1epass');
	if($conn->connect_error)
		{
		die('Connection Failed : '.$conn->connect_error);
		}
	else
		{
		$stmt=$conn->query("insert into personaldetail(namee,fathername,spousename,gender,age,phonenumber,caddress,noofpassengers) values('$namee','$fathername','$spousename','$gender','$age','$phonenumber','$caddress','$noofpassengers')");
		
		if($stmt)
		{
			
			header("location:ftravel.html");
		}
		}
?>