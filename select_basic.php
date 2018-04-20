<?php
$con=mysqli_connect("localhost","root","","training");

$sql="select *from student";
if($result=mysqli_query($con,$sql))
{
	while($row=mysqli_fetch_row($result))

	{
		//echo $row[0]."  ",$row[1];
	echo $row[0]."<br>";

	}

}

?>