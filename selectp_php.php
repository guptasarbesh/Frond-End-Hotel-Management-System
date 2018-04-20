<?php
$con=mysqli_connect("localhost","root","","training");
$roll=17;
$name="ajanakay2";
$lname="knoghtkniders";

$sql="insert into student(roll_no,first_name,last_name) values('$roll','$name','$lname')";
$sql="delete from student where roll_no=17";
if($con->query($sql)===TRUE)
{
	
	echo "New record created successfully";
}
else
{
	echo "Error:".$sql."<br>".$con->error;
}

?>