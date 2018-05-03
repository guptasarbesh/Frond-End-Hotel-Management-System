<?php

$con=mysqli_connect("localhost","root","","hotel");

	if(isset($_POST['login']))
	{
		$Name=$_POST['name'];
		$Email=$_POST['email'];
		$Password=$_POST['password'];
		
		$sql="insert into signup(name,email,password) values('$Name','$Email','$Password')";
		
		$result=mysqli_query($con,$sql);

		if($result)
		{
			echo "New record recorded sucessufully";
		}
		else
		{
			echo "Error:";
		}	
	}
	
?>