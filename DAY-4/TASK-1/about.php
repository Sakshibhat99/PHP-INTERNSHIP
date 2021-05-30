
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
  <title>Template Example-1</title>
  <meta name="description" content="free website template" />
  <meta name="keywords" content="enter your keywords here" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.easing.min.js"></script>
  <script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
  <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
  </script>
</head>

<body>
  <div id="main">	
	<div id="site_content">
      <?php
      
      include 'Includes/logo.php';
      
      ?>
	  <div id="header">
	 <?php
         
         include 'Includes/menu.php';
         ?>
      </div><!--close header-->	  
	  <div id="banner_image">
	   
            <img src="images/PICTURE 3.png" alt="" />
         
		  
	  </div><!--close banner_image-->			  
	  <div id="content">
              <h2>About Us:</h2>
                <h2>We Take Care of Your Comfort So That You Can Focus On Your Career</h2>
                
                <h4>Ready to move-in-homes for students and employees near places of study & work</h4>

                        <p align="justify"> A place where we want, everyone feels like at home, no matter if you are alone,
                   with family or friends. We want to provide you home away from home. You feel here, like staying 
                   at home, welcomed into a warm, friendly environment during your stay. Our PG has a unique charm 
                   about itself, with a blend of a homely feel and the services of a hotel. The rooms are fully 
                   furnished and equipped with high-quality products. Fresh Food, daily maintenance, and cleaning
                   of the rooms are guaranteed. We situated in a centrally located residential area, within a just
                   5-minute walking distance of the local supermarkets, schools, colleges, restaurants, shops, hospital,
                   and local municipality food markets. You will always find us ready to lend a helping hand and to 
                   tend to your needs.</p>
                        <ul>
                            <li>A place where you stay and enjoy with people of your age groups.</li>
                            <li>A place where you have to face the toughest days in the beginning but most enjoyable days later.</li>
                                 <li>A place where stores thousands of sweet & sour memories.</li>
                                 <li>A place that you will miss when you leave.</li>
                                 <li>A place that teaches you a lot of things with broad-minded people.</li>

    <h2>We respect your needs; this is not just a place to visit; this is your home away from home.</h2>
    
          </div>
		 
      <?php
      
     include 'includes/sidebar.php';
     
     ?>
    
	  
    </div><!--close site_content-->	
    <?php
    
       include 'includes/footer.php';
       
       ?>
 
  </div><!--close main-->	
</body>
</html>
