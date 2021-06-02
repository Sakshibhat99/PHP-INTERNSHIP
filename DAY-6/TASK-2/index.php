
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
$connection = mysqli_connect("localhost", "root", "" , "db_internship");

if($_POST) {
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
    
      
      $q= mysqli_query($connection,
             "insert into tbl_student(st_first_name, st_last_name, st_d_o_b, st_email, st_password, st_mobile,"
              . " st_address, st_city, st_gender, st_bloodgroup, st_hobbies) values('{$firstname}','{$lastname}',"
              . "'{$dob}','{$email}','{$password}','{$mobile}','{$address}','{$city}','{$gender}','{$bloodgroup}',"
              . "'{$hobbies}')")
        or die("Error". mysqli_error($connection));

if($q)
{
    echo "<script>alert('Record Added');</script>";
}
          
}
?>

<html>
    <head><title>REGISTRATION FORM</title></head>
    <body>
        <form method='post'>
            <table border="1"  align="center"  width="500" >
<b><u><caption>REGISTRATION FORM</caption></u><b>

<tr>
<th>Enter Your First Name</th>
<td><input type="text"  name="fn"/></td>
</tr>


<tr>
<th>Enter Your Last Name</th>
<td><input type="text" name="ln"/></td>
</td>
</tr>

<tr>
<th>Select Your D-O-B</th>
<td><input type="date"  name="dob" /></td>
</tr>

<tr>
<th>Enter Your Email</th>
<td><input type="email"  name="email"/></td>
</tr>

<tr>
<th>Enter Your Password</th>
<td><input type="password"  name="pass"/></td>
</tr>

<tr>
<th>Enter Your Mobile-No.</th>
<td><input type="tel"  name="num"/></td> </tr>
<tr>
    
<th>Enter Your Address</th>
<td><textarea rows="8" cols="20"  name="add"></textarea></td>
</tr>

<tr>
<th>Select Your City</th>
<td>
    <select name="city">
      <option>Jammu</option>
      <option>Ahmedabad</option>
      <option>Gandhinagar</option>
      <option>Modasa</option>
      <option>Other</option>
    </select>
</td>
</tr>

<tr>
<th>Select Your Gender</th>
<td>
<select name="gender">
      <option>Male</option>
      <option>Female</option>
      <option>Other</option>
 </select>
</td>
</tr>

<tr>
<th>Enter Your Blood Group</th>
<td><input type="text" name="bg"/></td>
</td>
</tr>

<tr>
    
<th>Enter your Hobbies</th>
<td><input type="text" name="hobbies"/></td>
</tr>

<tr>
<td colspan="2" align="center"><input type="submit" value="Submit"/>
<input type="reset" value="Reset"/>
</td>
</tr>

</table>
</form>
</body>
</html>

    
 
  </div><!--close main-->	
</body>
</html>
