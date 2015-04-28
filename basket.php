<?php
session_start();
if (!isset($_SESSION['user'])){
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Tennis City | Homepage</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link href="styles.css" rel="stylesheet" type="text/css" media="screen"/>
        <script src="banner.js"></script>
            <script>
                startTime();
            </script>
    </head>
    <body>
        <div id="top_header"><br></div>
        <header>
        <div id="header">  
            
            <div id="logo">
                <a href="index.php">
                <img src="images/mainlogo.png" alt="Logo" width="300" height="146"></a>
            </div>
            
            <div id="tc_slogan_top"><i>Practice makes perfect</i></div>
            <div id="tc_slogan_bottom"><i>Personalise makes perfection...</i></div>
            
            <div id="header_right">
                <?php
                    $user = $_SESSION['user'];   
                    echo "$user";
                 ?> | 
                <a href="logout.php"> Logout</a> 
                <br>
                <a href="basket.php">Basket</a> | 
                <a href="myaccount.php">My Account</a>
                <br>
                <form class="form-search">
                    <input type="text">
                    <button type="submit" class="btn">Search</button>
                </form>
               
            </div>
        </div>
        </header>

        <ul id="menu">  
            <li><a href="indexcon.php">Home</a></li> 
            <li><a href="productscon.php">Products</a></li>
            <li><a href="flagshipcon.php">Sensor</a></li>
            <li><a href="aboutuscon.php">About Us</a></li>
        </ul>

        <div id="main_content" align="center">
         <div id="titleStrip"><div id="titleBox"><h1><i>Basket</i></h1></div></div> 
            
         <h3>Thank you. The item you selected has been added. Please continue shopping or submit your order.</h3>
            
              
     
    <div>
    	<h1 align="center">Your Shopping Cart</h1>
        
         <?php
            foreach ($_POST as $key => $value) {
            if (isset($_SESSION[$key])){
                $_SESSION[$key] = $_SESSION[$key]+1;
            }else{
                $_SESSION[$key] = 1;
            }
            }
            
            
            $con = mysqli_connect("localhost", "root", "root", "tenniscity");
            
            echo "<div id='basket'>";
             echo "<table cellpadding=\"20\">";
             echo "<th>Product Name</th><th>Price</th><th>Quantity</th>";
             $totalcost = 0;
             foreach ($_SESSION as $key => $value){
                 if ($key != 'user'){
                      $pname = str_replace('_', ' ', $key);
                      $result = mysqli_query($con, "SELECT price FROM "
                              . "tblProduct WHERE pname = \"$pname\"");
                      $row = mysqli_fetch_array($result);
                      echo "<tr align=\"center\"><td>$pname</td>";
                      echo "<td align=\"center\">&#163; $row[0]</td>";
                      echo "<td align=\"center\">$value</td>";
                      echo "<td><form action=\"basket.php\" method=\"GET\">
                            <input type=\"submit\" name=\"$key\" "
                            . "value=\"Remove $pname from Basket\"> </td></tr>";
                      
                      $pprice = $row[0];
                      $totalcost = $totalcost + $pprice*$value;                      
               }
            }
           echo"</table>";
           echo"<br><br>";
           echo"<table>";
           echo"<tr><td><strong>The Total price is:</strong></td>";
           echo"<td>&#163; $totalcost</td></tr>";
           echo"</table>";
           echo "</div>";
           
           
            foreach ($_GET as $key => $value) {
           unset($_SESSION[$key]);}
           mysqli_close($con);
           ?>

        
    <input type="button" value="Continue Shopping" onclick="window.location='products.php'" />
    </div>
         
    <input class="button" type="button" value="Place Order" onclick="window.location='order.php'">
         
        </div>

        <div id="abelow"><br></div>
        
       <footer>
        <br>
            <div id="inner_footer">
                ADDRESS: Tennis City, City Road, London, EC1V 0HB<br>
                EMAIL: information@tenniscity.co.uk<br>
                TELEPHONE: 0845 111 3111<br>
                FAX: 0845 111 3112
            </div>

        </footer>

        <div id="lower_footer">
            <a id="aboutus_link" href="aboutuscon.php">About Us</a> | Accessibility | Terms Conditions | Privacy | Contact us
        </div>

    </body>
</html>