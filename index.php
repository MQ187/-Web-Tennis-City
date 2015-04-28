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
                <a href="login.php"> Login/Register</a>
                <br>
                <form class="form-search">
                    <input type="text">
                    <button type="submit" class="btn">Search</button>
                </form>
               
            </div>
        </div>
        </header>

        <ul id="menu">  
            <li><a href="index.php">Home</a></li> 
            <li><a href="products.php">Products</a></li>
            <li><a href="flagship.php">Sensor</a></li>
            <li><a href="aboutus.php">About Us</a></li>
        </ul>

        <div id="main_content">
         <div id="titleStrip"><div id="titleBox"><h1><i>Home</i></h1></div></div> 
            <p align="center">
                <a href="flagship.php">
                    <img id="img1" src="images/banner3.png" width="890" height="250" alt="Banner"></a>
                <br>
                <img id="main_img_1" src="images/main_racket.png" width="440" height="250"/>
                <img id="main_img_2" src="images/main_acc.png" width="440" height="250"/></p>
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
            <a id="aboutus_link" href="aboutus.php">About Us</a> | Accessibility | Terms Conditions | Privacy | Contact us
        </div>

    </body>
</html>
