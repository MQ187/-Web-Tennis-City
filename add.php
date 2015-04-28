<?php
//connect to server
$con = mysqli_connect("localhost", "root", 
        "root", "tenniscity", "8889");
//this line gets the password from $_POST
//and hashes it
$pwd = md5($_POST['pwd']);
//this line creates a query (as an SQL string)
//using data entered by the user
//and collected from $_POST
$query = "INSERT INTO tblCustomer VALUES ("
        . "\"$_POST[fname]\", \"$_POST[lname]\", "
        . "\"$_POST[email]\", \"$pwd\", "
        . "\"$_POST[housenumber]\", \"$_POST[streetname]\", "
        . "\"$_POST[city]\", \"$_POST[postcode]\")";
//this line prints out the query
//echo $query;
//this line runs the query
mysqli_query($con, $query);
mysqli_close($con);
header("Location: index.php");


