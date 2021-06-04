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
               
		 <?php
//DB Connection
$connection = mysqli_connect("localhost", "root", "" , "db_internship");


$id = $_GET['deleteid'];

$q = mysqli_query($connection, "delete from tbl_student where st_id= '{$id}'")or die(mysqli_error($connection) );

if ($q)
{
    echo "<script>alert('Record Deleted');window.location='Display.php';</script>";
}

?>


	
		
	  </div><!--close content-->	    

     
    
	  
    </div><!--close site_content-->	
    <?php
    
       include 'includes/footer.php';
       
       ?>
 
  </div><!--close main-->	
</body>
</html>
