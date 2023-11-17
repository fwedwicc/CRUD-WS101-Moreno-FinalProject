<!DOCTYPE html>
<html lang="en">
<head>
    <title>MSHOP I Delete</title>
</head>
<body>
<?php include("header.php"); ?>
<?php

require ("dbconnect.php");

$id=$_GET["id"];
$sqldelete= "DELETE from clients where id=$id";
mysqli_query($con, $sqldelete) or die (mysqli_error("Error"));
mysqli_close($con);
echo "<div id='contt'>";
echo "<br><br>Record with the ID: <b>$id</b> Successfully Deleted <br><br>";
echo "<a href='deletesearch.php'>Delete Another</a><br>";
echo "<a href='viewall.php'>View Records</a>";
echo "</div>";
?>
<style>
body {
    color: #757575;
    font-family: 'Roboto Condensed', sans-serif;
    font-size: 12px;
}
    #contt {
    text-align: center;
    margin-left: 39%;
    text-align: center;
    box-shadow: -10px -10px 14px #ffffff73, 10px 10px 12px rgba(94, 104, 121, .288);
    border-radius: 13px;
    width: 15rem;
    padding: 15px;
    margin-bottom: 13px;
    height: 7.6rem;
    color: #757575;
    margin-top: 1rem;
}
</style>
</body>
</html>