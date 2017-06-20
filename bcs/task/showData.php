<?php
$con=mysqli_connect ('localhost','root','password','myDB');

function showData(){

global $con;
$query="SELECT * FROM `people`";

$run=mysqli_query($con,$query);

if ($run==TRUE)
{
	//echo"yes";
	?>
	<table border="1"width="80%">
		<th>ID</th>
		<th>First Name</th>
		<th>Last Name</th>


	<?php
	while (	$data = mysqli_fetch_assoc($run)){
		?>
		<tr>
			<td> <?php echo $data ['ID']; ?></td>
			<td> <?php echo $data ['FN']; ?></td>
			<td> <?php echo $data ['LN']; ?></td>

		</tr>
		<?php
  // <!-- echo "<pre>";
	// print_r($data); -->

}
 ?> </table> <?php
}
 else
 {
	 echo "Query not executed";

 }
}

//showData();
 ?>

 <html>
	<head>
		<title> Show Data </title>
		<link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
		<link rel="stylesheet" href="showData.css">
	</head>
	<body>
	<h1 id="heading"> My database data </h1>
	<?php

	showData();



	?>

	</body>
</html>
