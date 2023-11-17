<!DOCTYPE html>
<html lang="en">
<head>
    <title>MSHOP I Delete</title>
</head>
<body>
<?php include("header.php"); ?>
<?php
    require("dbconnect.php");
    $f=$_POST["combo1"];
    $v=$_POST["text1"];

    $sqlsearch="SELECT * from clients where $f ='$v'";
    $result=mysqli_query($con, $sqlsearch) or die (mysqli_error($con));
        if (mysqli_num_rows($result)>0)
        {
            echo "<br><table align=center width=70%
            style='background-color: #3C3C3C;
            padding: 9px;
            border-radius: 21px;
            background: #dde1e7;
            border-radius: 19px;
            box-shadow: -15px -15px 19px #ffffff73, 15px 15px 17px rgba(94, 104, 121,.288);'>";
            echo "<tr id='trr'
            style='border:1px solid white;
            background-color: #b0b0b0;
            color: #4d4d4d;'>";
            echo "<th style='border-radius: 10px 0px 0px 0px;'> ID </th>";
            echo "<th>Name</th>";
            echo "<th>Email Address</th>";
            echo "<th>Phone Number</th>";
            echo "<th>Address</th>";
            echo "<th>Created At</th>";
            echo "<th style='border-radius: 0px 10px 0px 0px;'> Action </th>";
            echo "</tr>";

            $row = mysqli_fetch_row($result);
            echo "<tr>";
            echo "<td>$row[0]</td>";
            echo "<td>$row[1]</td>";
            echo "<td>$row[2]</td>";
            echo "<td>$row[3]</td>";
            echo "<td>$row[4]</td>";
            echo "<td>$row[5]</td>";
            echo "<td><a href=deleteprocess.php?empid=$row[0] onclick=\"return confirm('Sure to Delete?');\">Delete</a></td>";
            echo "</tr>";
            echo "</table>";
        }
        else
        {
        echo "No Client Found";
        }
mysqli_free_result($result);
mysqli_close($con);
?>
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
</body>
</html>