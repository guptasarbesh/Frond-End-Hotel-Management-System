<?php

	if(isset($_POST['submit']))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];
		
//		echo $username."<br>".$password;
		$con=mysqli_connect("localhost","root","","training");
		$sql="insert into sdata(username,password) values('$username','$password')";
	$sql="delete from sdata where username='sarbesh@'";

		$result=mysqli_query($con,$sql);

		if($result===TRUE)
		{
			echo "New record recorded sucessufully";
		}
		else
		{
			echo "Error:".$sql."<br>".$con->error;
		}
	}
	
?>