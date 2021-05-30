<html xmlns="http://www.w3.org/1999/xhtml">

<head>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>TEMPLATE EXAMPLE 3</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div id="container">

  <?php
  
  include 'Includes/header.php';
  
  ?>
  
  <div id="mainContent">
  
              <h1>Contact Us:</h1>
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
    
    
	</div><!-- end #mainContent -->
    
  <?php
  
include 'Includes/footer.php';
  
  ?>
  
</div><!-- end #container -->

</body>
</html>

