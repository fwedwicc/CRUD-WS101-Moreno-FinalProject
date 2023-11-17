<!DOCTYPE html>
<html lang="en">
<head>
    <title>MSHOP I Search</title>
</head>
<body>
    <?php include ("header.php"); ?>
    <form method = "post" action = "searchresult.php">
        <div id="con">
            <br>
            <h2>Search for Client</h2><br>
            Field: 
            <select name = "combo1" id="combo-box">
                <option value="id" selected> ID </option>
                <option value="name"> Name </option>
                <option value="email"> Email </option>
                <option value="phone"> Phone </option>
                <option value="address"> Address </option>
            </select>
            <p>Value:</p>
            <input type="text" name="text1"> <br><br><br>
            <input type="submit" name="btn1" value="Search" id="button"> 
            <br>
            <br>
        </div>
</form>
<style>
body {
    color:  #757575;
    font-family: 'Roboto Condensed', sans-serif;
    font-size: 12px;
}
#con {
    box-shadow: -15px -15px 19px #ffffff73, 15px 15px 17px rgba(94, 104, 121, .288);
    padding: 20px;
    width: 20rem;
    text-align: center;
    height: 15.7rem;
    border-radius: 21px;
    margin-left: auto;
    margin-right: auto;
    margin-top: 14px;
}
#combo-box {
    height: 28px;
    width: 113px;
    background: #dde1e7;
    border-radius: 8px;
    box-shadow: -5px -5px 9px #ffffff73, 5px 5px 7px rgba(94, 104, 121, .288);
    border-style: none;
    font-family: 'Roboto Condensed', sans-serif;
    color: #757575;
    font-size: 12px;
    cursor: pointer;
    text-align: center;
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