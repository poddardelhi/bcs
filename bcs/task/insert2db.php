<?php

//
// echo $_POST['ID'];
// echo $_POST['FN'];
// echo $_POST['LN'];
$id =$_POST['ID'];
$FN= $_POST['FN'];
$LN=$_POST['LN'];

$con= mysqli_connect ('localhost','root','password','myDB');
$query= "INSERT INTO `people`(`ID`, `FN`, `LN`) VALUES ('$id','$FN','$LN')";

$run=mysqli_query($con,$query);

if ($run==TRUE)

  echo "Data insert Successfully";
else
echo "Error!";
 ?>
