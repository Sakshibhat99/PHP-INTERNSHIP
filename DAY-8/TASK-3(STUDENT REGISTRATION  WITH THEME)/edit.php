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

if(!isset($_GET['id']) || empty($_GET['id'])){
    header("location:Display.php");
}

$editid = $_GET['id'];
//Select Data From Table
$editq = mysqli_query($connection, "select * from tbl_student where st_id='{$editid}'") or die(mysqli_error($connection));
$editdata = mysqli_fetch_array($editq);

//print_r($editdata);
if($_POST){
    $firstname = $_POST['fn'];
    $lastname = $_POST['ln'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $mobile = $_POST['num'];
    $address = $_POST['add'];
    $city = $_POST['city'];
    $gender = $_POST['gender'];
    $bloodgroup = $_POST['bg'];
    $hobbies = $_POST['hobbies'];
    
  
   $uq = mysqli_query($connection,"update tbl_student set st_first_name= '{$firstname}',st_last_name= '{$lastname}',st_d_o_b= '{$dob}',st_email= '{$email}',st_password= '{$password}',st_mobile= '{$mobile}',st_address= '{$address}',st_city= '{$city}',st_gender= '{$gender}',st_bloodgroup= '{$bloodgroup}',st_hobbies= '{$hobbies}' where st_id='{$editid}'")
   or die(mysqli_error($connection));
    
    if($uq) {
        echo "<script>alert('Record Updated'); window.location='Display.php';</script>";
    }
}
?>

<html>
    <body>
        <form method="post">
            First Name :<input type ="text" value="<?php echo $editdata['st_first_name'];?>" name = "fn" /></br>
            Last Name :<input type ="text" value="<?php echo $editdata['st_last_name'];?>" name = "ln" /></br>
            D-O-B :<input type ="date" value="<?php echo $editdata['st_d_o_b'];?>" name = "dob" /></br>
            Email :<input type ="email" value="<?php echo $editdata['st_email'];?>" name = "email" /></br>
            Password :<input type ="password" value="<?php echo $editdata['st_password'];?>" name = "pass" /></br>
            Mobile:<input type ="number" value="<?php echo $editdata['st_mobile'];?>" name = "num" /></br>
            Address :<textarea rows="8" cols="20" name="add"><?php echo $editdata['st_address'];?></textarea></br>
            City : <select name="city">
                     <option><?php if ($editdata['st_city']=="Jammu"){ echo 'selected'; } ?>Jammu</option>
                     <option><?php if ($editdata['st_city']=="Ahmedabad"){ echo 'selected'; } ?>Ahmedabad</option>
                     <option><?php if ($editdata['st_city']=="Gandhinagar"){ echo 'selected'; } ?>Gandhinagar</option>
                     <option><?php if ($editdata['st_city']=="Modasa"){ echo 'selected'; } ?>Modasa</option>
                     <option><?php if ($editdata['st_city']=="Other"){ echo 'selected'; } ?>Other</option>
                   </select></br>
            Gender: Male<input type="radio"<?php if ($editdata['st_gender']=="Male"){ echo "checked"; } ?> value="Male" name="gender" />
                    Female<input type="radio" value="Female" <?php if ($editdata['st_gender']=="Female"){echo "checked";}?>  name="gender" /></br>
            Bloodgroup :<input type ="text" value="<?php echo $editdata['st_bloodgroup'];?>" name = "bg" /></br>      
            Hobbies :<input type ="text" value="<?php echo $editdata['st_hobbies'];?>" name = "hobbies" /></br>  
        <input type="submit"/>
        </form>
        
        
    </body>
    
    
</html>


<?php
if(isset($_POST['edit'])){
echo $textspace;
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