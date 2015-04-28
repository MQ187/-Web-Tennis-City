<?php
session_start();
$con = mysqli_connect("localhost", "root", 
        "root", "tenniscity", "8889");

$query = "SELECT email FROM tblCustomer WHERE"
        . " email=\"$_POST[email]\" AND password ="
        . " MD5(\"$_POST[pwd]\")";

$result = mysqli_query($con, $query);
mysqli_close($con);

#Check if a row has been added to the database
if (mysqli_num_rows($result)===1){
    $_SESSION['user'] = $_POST['email'];
   header( "refresh:2; url=indexcon.php" );
   $user = $_SESSION['user'];   
  echo "<h1>Welcome back, $user</h1>";
    
} else {
    echo "<script language=\"JavaScript\">\n";
    echo "alert('Username or Password was incorrect!');\n";
    echo "window.location='login.php'";
    echo "</script>";
}