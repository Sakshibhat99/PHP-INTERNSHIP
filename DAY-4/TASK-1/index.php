
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
		  <h1>Welcome!!!</h1>
          <p align="justify">The hostel is a place where students stay for pursuing formal education away from their homes.
    But the concept of hostel is not only limited to place of residence, hostel is a human practical laboratory. 
    Therefore hostel is not simply a place for living it is a center of education. Students learn as much as
    from their teachers as well as fellows during hostel stay. It enriches the understanding of the curriculum 
    through analytical discussion among the students living in the hostels, and may contribute to character
    building as well.Students in hostel not only learn the theoretical material they also learn how to enhance
    their personal abilities and learn to live independently .</p>
		<div class="content_underline"></div>
	   
		
                    <p align="justify">There is a popular quotation “Times change people changes” it is best applicable for the hostel students.
Hostel life going to change the way a student is, its effect on the personality behavior, thinking, 
and dressing as well. In hostel students are surrounded by other students of about the same age as they are,
all those students have different characteristics.In hostel life all students have to adjust to the other students stayed in the hostel </p>
             
		<br style="clear:both"/>
	    <div class="content_image_right">
		  <a href="#"><img alt="image" src="images/PICTURE 2.jpg" /></a>
		</div><!--close content_image-->
		<div class="content_text_left">
                    <p align="justify">In some countries the word hostel is specifically used for the accommodation of student and travelers.
    However in India and Pakistan, the hostel is believed to be a place of residence that a school, 
    colleges or universities has, all hostels are supervised by the hostel wardens and other staff. 
    The hostel generally consists hundreds of students. All of them make a group of students.
    These students come from different ethical, social, geographical and economical background.</p>
		</div><!--close content_text-->  		
		
	  </div><!--close content-->	    

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
