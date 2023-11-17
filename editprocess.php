<!DOCTYPE html>
<html lang="en">
<head>
	<title>MSHOP  I Edit</title>
</head>
<body>
<?php include("header.php"); ?>
<?php
require ("dbconnect.php");
$id=$_POST["text1"];
$n=$_POST["text2"];
$em=$_POST["text3"];
$ph=$_POST["text4"];
$add=$_POST["text5"];
$sqledit= "update clients set
			name = '$n', email ='$em',
			phone ='$ph', address = '$add'
			where id=$id";

mysqli_query($con, $sqledit) or die (mysqli_error($con));
mysqli_close($con);
echo "<div id='conttt'>";
echo "<br><br>Record with ID: <b>$id</b> Successfully Updated<br><br>";
echo "<a href='editsearch.php'>Edit Another</a><br>";
echo "<a href='viewall.php'>View Records</a>";
echo "</div>";
?>
<style>
body {
	color: #757575;
	font-family: 'Roboto Condensed', sans-serif;
	font-size: 12px;
}
#conttt {
	text-align: center;
	margin-left: auto;
	margin-right: auto;
	text-align: center;
	box-shadow: -10px -10px 14px #ffffff73, 10px 10px 12px rgba(94, 104, 121, .288);
	border-radius: 13px;
	width: 15rem;
	padding: 15px;
	margin-bottom: 13px;
	height: 7rem;
	color: #757575;
	margin-top: 1rem;
}
</style>
</body>
</html>