<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Tennis City | Order</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link href="styles.css" rel="stylesheet" type="text/css" media="screen"/>
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
         <div id="titleStrip"><div id="titleBox"><h1><i>Order</i></h1></div></div> 
         
             <h3>You have ordered:</h3>
             
        <?php
        $con = mysqli_connect("localhost", "root", "root", "tenniscity");
        $user = $_SESSION['user'];
        
        foreach ($_SESSION as $key => $value) {
            if ($key != 'user'){
                $productn = str_replace('_', ' ', $key);
                $query = "INSERT INTO tblOrder VALUES (null, \"$user\", \"$productn\","
                        ." \"$value\")";
                
                mysqli_query($con, $query);
                echo "<p>$productn - $value</p>";
                $_SESSION[$key] = 0;
                unset($key);
            }
        }
        mysqli_close($con);
        ?>
             
        <input class="button" value="Return Home" onclick="window.location='indexcon.php'">
         
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