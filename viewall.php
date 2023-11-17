<!DOCTYPE html>
<html lang="en">
<head>
    <title>MSHOP  I  View</title>
    <link href="https://fonts.googleapis.com/css2?family=Gowun+Dodum&fam    
    ily=Roboto+Condensed:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
<?php include("header.php"); ?>
    <?php
    $host = "localhost";
    $user = "fred";
    $pass = "1234";
    $db = "myshop";
    $con = mysqli_connect($host, $user, $pass, $db) or die("ERROR CONNECTION");
    $sql = "SELECT * FROM clients ORDER BY id ASC ";
    $result = mysqli_query($con, $sql) or die (mysqli_error($con));
    if (mysqli_num_rows($result)>0)
    {   
        echo "<h2>LIST OF CLIENTS:</h2>";
        echo "<br><table align=center width=70% 
        style='background-color: #3C3C3C; 
        padding: 9px; 
        border-radius: 21px;  
        background: #dde1e7;
        border-radius: 19px;
        box-shadow: -15px -15px 19px #ffffff73, 15px 15px 17px rgba(94, 104, 121, .288);'>";
        echo "<tr id='trr'
        style='border:1px solid white; 
        background-color: #b0b0b0; 
        color: #4d4d4d;'>";
        echo "<th 
        style='border-radius: 10px 0px 0px 0px;'> ID </th>";
        echo "<th> Name </th>";
        echo "<th> Email Address </th>";
        echo "<th> Phone Number </th>";
        echo "<th> Address </th>";
        echo "<th style='border-radius: 0px 10px 0px 0px;'> Created At </th>";
        echo "<tr>";

        while(($row=mysqli_fetch_row($result)) != null)
        {
            echo "<tr>";
            echo "<td> $row[0] </td>";
            echo "<td> $row[1] </td>";
            echo "<td> $row[2] </td>";
            echo "<td> $row[3] </td>";
            echo "<td> $row[4] </td>";
            echo "<td> $row[5] </td>";
            echo "</tr>";
        }
      echo "</table><br><br>";
      echo "<center> Found <b>" .mysqli_num_rows($result) ."</b> Client/s </center>";
    }
    else
    {
        echo "No records";
    }
    mysqli_free_result($result);
    mysqli_close($con);
?>
<style>
body {
    color: #757575;
    font-family: 'Roboto Condensed', sans-serif;
    font-size: 12px;
}
th {
    padding: 10px;
}
h2 {
    margin-left: 14.5rem;
    letter-spacing: 2.5px;
}
</style>
</body>
</html>