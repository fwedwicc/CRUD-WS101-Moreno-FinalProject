<!DOCTYPE html>
<html lang="en">
<head>
    <title>MSHOP I Insert</title>
</head>
<body>
<?php include("header.php"); ?>
<br>
<form method="post" action="insertprocess.php">
    <div id="con">
        <h2> Add Client </h2>
        <p>Name:</p><input type="text" name="text1" size="30" required>
        <p>Email Address:</p><input type="text" name="text2" size="30" required>
        <p>Phone Number:</p><input type="text" name="text3" size="30" required>
        <p>Address:</p><input type="text" name="text4" size="30" required><br>
        <br>
        <br>
        <input type="submit" name="btn1" value="Insert" id="button">
    </div>
</form>

<style>
body {
    color:  #757575;
    font-family: 'Roboto Condensed', sans-serif;
    font-size: 12px;
}
input {
    border-radius: 5px;
    background: #dde1e7;
    box-shadow: inset -5px -5px 9px #ffffff73, inset 5px 5px 7px rgba(94, 104, 121, .288);
    border-style: none;
    background: #dde1e7;
    width: 170px;
    height: 25px;
}
#con {
    box-shadow: -15px -15px 19px #ffffff73, 15px 15px 17px rgba(94, 104, 121, .288);
    padding: 20px;
    width: 20rem;
    text-align: center;
    height: 23.5rem;
    border-radius: 21px;
    margin-left: auto;
    margin-right: auto;
}
#button {
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