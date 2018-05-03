
<?php
	if(isset($_POST['submit']))
	{
		session_start();
		$_SESSION['email']=$_POST['email'];
		$_SESSION['password']=$_POST['password'];		
		$con=mysqli_connect("localhost","root","","hotel");
		$sql="select password from signup where email='{$_SESSION["email"]}'";
		if($result=mysqli_query($con,$sql))
		{
		$row=mysqli_fetch_row($result);
		{
			if($_SESSION["password"]==$row[0])
			{
					echo 'password match';
				
			}

			else
			{
			echo 'password donot match';
			}
		}
	}
}

?>