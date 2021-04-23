<html>
  <head>
      </head>
    <style>
      body {
        text-align: center;
        padding: 40px 0;
        background: #EBF0F5;
      }
        h1 {
          color: #88B04B;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-weight: 900;
          font-size: 40px;
          margin-bottom: 10px;
        }
        p {
          color: #404F5E;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-size:20px;
          margin: 0;
        }
      
    </style>
    <body>
        
        <h1>Success</h1> 
        <p>We received your E-PASS request;<br/> we'll be in touch shortly!</p>
        <p> Your reg id is </p>
	<?php
	

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "t1epass";
		

		$mysqli = new mysqli($servername,$username,$password,$dbname);

		if($mysqli->connect_error)
		{
			die('Error: ('. $mysqli->connect_errno.')'.$mysqli->connect_error);
		}
		$query = "SELECT (`referid`) FROM `fdetails` ORDER BY referid DESC LIMIT 1";
		$result = mysqli_query($mysqli,$query) or die(mysqli_error());
		$num_row = mysqli_num_rows($result);
		$row = mysqli_fetch_array($result);
		
		
		echo "<p>$row[0]</p>";

	
	?>

      
    </body>
</html>