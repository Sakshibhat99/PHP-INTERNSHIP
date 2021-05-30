<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>TEMPLATE EXAMPLE 2</title>
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Abel|Satisfy' rel='stylesheet' type='text/css'>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper">
	<?php
        include 'Includes/header.php';
        ?>

	<div id="featured-content">
		<div id="column1">
                    <h2>Black-Eyed Susan</h2>
                    <p><img src="images/IMAGE 2.jpg" width="300" height="150" alt="" /></p>
			<p align="justify">This annual plant is scientifically known as Rudbeckia. This type of flower is often confused with Daisies.
                            However, Black-eyed Susans are usually taller (as they can reach up to 4 feet in height), and they will
                            bloom in late summer. They require lots of sunlight to survive and well-drained soil.</p>
		
			</div>
		<div id="column2">
                        <h2>Bird of Paradise</h2>
			<p><img src="images/IMAGE 1.jpg" width="300" height="150" alt="" /></p>
                        <p align="justify">Bird of Paradise,known as Strelitzia, is a perennial flower. Its yellow variety is very exotic! They need to be exposed to full sunlight; otherwise, they won’t thrive. </p> 
		
			</div>
		<div id="column3">
			<h2>Calendulas</h2>
			<p><img src="images/IMAGE 3.jpg" width="300" height="150" alt="" /></p>
                        <p align="justify">Calendulas are scientifically referred to as Calendula officinalis. They are not only edible flowers, 
                            but they will also deter any pests away from the garden. Calendulas are known for being a very powerful flower with many health benefits as well! </p>
		</div>
	</div>
	<div id="page">
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
		<!-- end #content -->
		<?php
                
                        include 'Includes/sidebar.php';
                
                ?>
		<div style="clear: both;">&nbsp;</div>
	</div>
	<!-- end #page --> 
</div>

<?php

                    include 'Includes/footer.php';
?>

</body>
</html>
