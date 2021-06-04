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
//Query
$q= mysqli_query($connection,
             "select * from tbl_student")or die("Error". mysqli_error($connection));

echo"<table border='1'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>FirstName</th>";
echo "<th>LastName</th>";
echo "<th>D-O-B</th>";
echo "<th>Email</th>";
echo "<th>Pass</th>";
echo "<th>Mobile</th>";
echo "<th>Address</th>";
echo "<th>City</th>";
echo "<th>Gender</th>";
echo "<th>Bloodgroup</th>";
echo "<th>Hobbies</th>";
echo "<th>Action</th>";
echo "</tr>";

$i =0;
while($row = mysqli_fetch_array($q)){
    $i++;
    echo"<tr>";
    echo"<td>$i</td>";
    echo"<td>{$row['st_first_name']}</td>";
    echo"<td>{$row['st_last_name']}</td>";
    echo"<td>{$row['st_d_o_b']}</td>";
    echo"<td>{$row['st_email']}</td>";
    echo"<td>{$row['st_password']}</td>";
    echo"<td>{$row['st_mobile']}</td>";
    echo"<td>{$row['st_address']}</td>";
    echo"<td>{$row['st_city']}</td>";
    echo"<td>{$row['st_gender']}</td>";
    echo"<td>{$row['st_bloodgroup']}</td>";
    echo"<td>{$row['st_hobbies']}</td>";
   
   
    echo"<td><a href = 'edit.php?id={$row['st_id']}'>Edit</a> |<a href ='delete.php?deleteid={$row['st_id']} '>Delete</td>";
    echo"</tr>";
  
}
echo"</table>";

echo "<a href='insert.php'>Add Record</a>";

 ?>


	
		
	  </div><!--close content-->	    

     
    
	  
    </div><!--close site_content-->	
    <?php
    
       include 'includes/footer.php';
       
       ?>
 
  </div><!--close main-->	
</body>
</html>
