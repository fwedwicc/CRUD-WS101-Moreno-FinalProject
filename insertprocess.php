<!DOCTYPE html>
<html lang="en">
<head>
    <title>MSHOP I Insert</title>
    <link href="https://fonts.googleapis.com/css2?family=Gowun+Dodum&fam    
    ily=Roboto+Condensed:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@900&display=swap" rel="stylesheet">
</head>
<body>
<?php include("header.php"); ?>
<?php
    require("dbconnect.php");
    $n = $_POST["text1"];
    $em = $_POST["text2"];
    $ph = $_POST["text3"];
    $add = $_POST["text4"];
    $sqlinsert = "INSERT INTO clients (name, email, phone, address)
                    VALUES ('$n', '$em', $ph, '$add' )";
    mysqli_query($con, $sqlinsert) or die (mysqli_error($con));
    mysqli_close($con);
        echo "<div id='containerRR'>";
        echo "<br><br>Successful Inserted! <br><br>" ;
        echo "<a href='insertform.php'> Insert Again </a> <br>";
        echo "<a href='viewall.php'> View Records </a>";
?>
<style>
body {
    color: #757575;
    font-family: 'Roboto Condensed', sans-serif;
    font-size: 12px;
}
#containerRR {
    margin-left: auto;
    margin-right: auto;
    text-align: center;
    box-shadow: -10px -10px 14px #ffffff73, 10px 10px 12px rgba(94, 104, 121, .288);
    border-radius: 13px;
    width: 15rem;
    padding: 15px;
    margin-bottom: 13px;
    height: 7rem;
    margin-top: 1rem;
}
a {
    text-decoration: none;
    color:  #757575;
    padding: 13px; 
    font-size: 12px;
}
#butt {
    background: #dde1e7;
    box-shadow: -10px -10px 14px #ffffff73, 10px 10px 12px rgba(94, 104, 121, .288);
    width: 5rem;
    text-align: center;
    padding: auto;
    height: 2rem;
    font-family: 'Roboto Condensed', sans-serif;
    color: #757575;
    font-size: 13px;
    cursor: pointer;
}
</style>
</body>
</html>