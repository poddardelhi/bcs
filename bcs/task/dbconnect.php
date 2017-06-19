<?php

$con=mysqli_connect ('localhost','root','password','myDB');

if ($con)
{
	echo"Connection is established";
}
else 
{
	die("Error! in the connection");
	
}

?>