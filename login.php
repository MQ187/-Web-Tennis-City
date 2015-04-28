<!DOCTYPE html>
<html>
    <head>
        <title>Tennis City | Login/Register</title>
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
         <div id="titleStrip"><div id="titleBox"><h1><i>Login</i></h1></div></div> 
            
          <div class="flat-form">
            <div class="title">
                    <a>Login</a>
            </div>
            <div id="login" class="form-action">
                <p>
                    Existing Customers you know what to do... New customer fill in the Register form on the right :D
                </p>
                <form action="auth.php" method="POST">
                    <ul>
                        <li>
                            <input type="email" name="email" placeholder="Email" class="text"/>
                        </li>
                        <li>
                            <input type="password" name="pwd" placeholder="Password"/>
                        </li>
                        <li>
                            <input type="submit" value="Login" name="Login" class="button"/>
                        </li>
                    </ul>
                </form>
            </div>
            </div>
            <div class="flat-form">
             <div class="title">
                    <a>Register</a>
            </div>
            <div id="register" class="form-action">

                <p>
                    You should totally sign up for our super awesome service.
                    We'll give you a free cookie?
                </p>
                <form action="add.php" method="POST">
                    <ul>
                    	<li>
                            <input type="text" name="fname" placeholder="First Name" class="text"/>
                        </li>
                    	<li>
                            <input type="text" name="lname" placeholder="Last Name" class="text"/>
                        </li>
                        <li>
                            <input type="email" name="email" placeholder="Email" class="text"/>
                        </li>
                        <li>
                            <input type="password" name="pwd" placeholder="Password"/>
                        </li>
                        <li>
                            <input type="text" name="housenumber" placeholder="House Number" class="text"/>
                        </li>
                        <li>
                            <input type="text" name="streetname" placeholder="Street Name" class="text"/>
                        </li>
                         <li>
                            <input type="text" name="city" placeholder="City" class="text"/>
                        </li>
                         <li>
                            <input type="text" name="postcode" placeholder="Post Code" class="text"/>
                        </li>
                        <li>
                            <input type="submit" value="Register" name="Add Customer" class="button"/>
                        </li>
                    </ul>
                </form>
            </div>

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
            <a id="aboutus_link" href="aboutus.php">About Us</a> | Accessibility | Terms Conditions | Privacy | Contact us
        </div>

    </body>
</html>
