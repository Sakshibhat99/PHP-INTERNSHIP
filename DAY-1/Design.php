<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" href="styles/Stylesheet.css"
    </head>
    <body>
        <div id="wrapper">
            <div id="banner">
                <p><h1 align="center">HOSTEL MANAGEMENT SYSTEM </h1></p>
            </div>
            
            <nav id="navigation">
                <ul id="nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="Login.php">Login</a></li>
                    <li><a href="Registration.php">Registration</a></li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">About Us</a></li>
               
                    
                        
                </ul>
            </nav>
            
            <div id="content_area">
                <?php echo $content;?>
            </div>
            
            <div id="sidebar">
                <img src="Images/PICTURE 3.png" class="imgRight"/>
            </div>

            <footer><p> All rights reserved @Sakshi Bhat</p></footer>
            
       
    </body>
</html>

