
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
              <h2>Contact Us:</h2>
        <div <p>Name</p></div>
	<div><p><input class="contact" type="text" name="your_name" value="" /></p></div>
        <div><p>Email</p></div>
		<div><p><input class="contact" type="text" name="your_email" value="" /></p></div>
        <div><p>Message</p></div>
	    <div><p><textarea class="contact textarea" rows="8" cols="50" name="your_message"></textarea></p></div>
        <br style="clear:both;" />
        <p style="padding: 10px 0 10px 0;">Please enter the answer to this simple maths question (to prevent spam)</p>
        <div><p>Maths Question: 9 + 3 = ?</p></div>
	    <div><p><input type="text" name="user_answer" class="contact" /><input type="hidden" name="answer" value="4d76fe9775" /></p></div>
        <div><p style="padding-top: 15px"><input class="submit" type="submit" name="contact_submitted" value="Send" /></p></div>
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
