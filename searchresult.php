<!DOCTYPE html>
<html lang="en">
<head>
    <title>MSHOP I Search</title>
</head>
<body>
    <?php include("header.php"); ?>
    <?php
     $host = "localhost";
     $user = "fred";
     $pass = "1234";
     $db = "myshop";
     $con = mysqli_connect($host, $user, $pass, $db) or die("ERROR CONNECTION");
     $f = $_POST["combo1"];
     $v = $_POST["text1"];
     $sqlsearch = "SELECT * FROM clients WHERE $f LIKE '$v%'";
     $result = mysqli_query($con, $sqlsearch ) or die (mysqli_error($con));
     if (mysqli_num_rows($result)>0)
    {
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
    <div id="ali">
        <a href="search.php" id="but"> Search again </a>
    </div>
    <br>
<style>
body {
    color: #757575;
    font-family: 'Roboto Condensed', sans-serif;
    font-size: 12px;
}
th {
    padding: 10px;
}
#but {
    height: 35px;
    width: 40px;
    background: #dde1e7;
    border-radius: 8px;
    box-shadow: -10px -10px 14px #ffffff73, 10px 10px 12px rgba(94, 104, 121, .288);
    border-style: none;
    font-family: 'Roboto Condensed', sans-serif;
    color: #757575;
    font-size: 13px;
    cursor: pointer;
}
#ali {
    margin-top: 2.5rem;
    text-align: center;
}
</style>
</body>
</html>