<!DOCTYPE html>
<html>
    <head>
        <title>Tennis City | Products</title>
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

        <div id="main_content" align="center">
         <div id="titleStrip"><div id="titleBox"><h1><i>Products</i></h1></div></div> 
            
             <?php
         echo "<div id='product_table'>";
        $con = mysqli_connect("localhost", "root", "root", "tenniscity", "8889");
        $result = mysqli_query($con, "SELECT * FROM tblProduct");
        echo "<table width = \"900\" cellpadding=\"20\">";
        echo "<th>Product Name</th><th>Product Image</th><th>Description</th><th>Price</th><th>Add to Basket</th>";
        while ($row = mysqli_fetch_array($result)){
            $pname = $row[1];
            $image = $row[2];
            $descrip = $row[3];
            $price = $row[4];
            echo "<tr><td>$pname</td>";
            echo "<td><img src=\"$image\" width=\"200\" height=\"150\" /></td>";
            echo "<td>$descrip</td>";
            echo "<td>&pound;$price</td>";
            echo "<td><form action=\"basket.php\" method=\"POST\">"
            . "<input type=\"submit\" name=\"$pname\",\"$price\" value=\"Add $pname to Basket\" />"
                    . "</form></td></tr>";
        }
        echo "</table>";
        echo "</div>";
        mysqli_close($con);
        ?>
         
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
