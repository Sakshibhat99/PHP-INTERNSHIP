 
<html>
    <head><title>FACTORIAL PROGRAM</title></head>
    <body>
<?php  
    $num = 19;  
    $factorial = 1;  
    for ($x=$num; $x>=1; $x--)   
    {  
      $factorial = $factorial * $x;  
    }  
    echo "Factorial of $num is $factorial";  
    ?>  
    </body>
</html>