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
        <title>Tennis City | Sensor Technology</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link href="styles.css" rel="stylesheet" type="text/css" media="screen"/>
        <script src="popup.js"></script>
    </head>
    <body>
        <div id="top_header"><br></div>
        <header>
        <div id="header">  
            
            <div id="logo">
                <a href="indexcon.php">
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

        <div id="main_content">
         <div id="titleStrip"><div id="titleBox">
           <h1><i>Sensor</i></h1></div></div> 
            
                <div id="flagship_content" align="center"><!--width="290" height="503"/>--><!--width="429" height="503"/></a>--> 
               <div id="imgbox">  
                </div>
                    <p><img id="img1" src="images/flagship1.png" onmouseover="Large(this)" width="50" height="50">
                      <img id="img2" src="images/flagship2.png" onmouseover="Large(this)" width="50" height="50">
                      <img id="img3" src="images/icon_3.png" onmouseover="Large(this)" width="50" height="50"></p>
                    <p>Our  patented sensor is included in all of our rackets. </p>
                    <p>Tracks:<br>
                      Power<br>
                      Impact  Location<br>
                      Number  of Strokes<br>
                      Type  of Strokes</p>
                    <p>The data collected by the racket will be sent to <strong>Tennis City SmartPlayer app</strong> where you  can view an in-depth analysis of every stroke you made on the court.</p>
<p></p>
                    <p>Use the graphs and charts to track your progress and help you improve your game,  our virtual tennis coach will guide you in the right direction so you can stand  out above the rest</p>
                    <br>
                    <br>
                    <br>
                    <br>
                </div>
            
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