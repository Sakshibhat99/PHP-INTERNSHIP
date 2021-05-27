<html>
    <head><title>ARMSTRONG NUMBER</title></head> 
    <body>
        
  <?php
function armstrongCheck($number){
    $sum = 0; 
    $x = $number; 
    while($x != 0) 
    { 
        $rem = $x % 10; 
        $sum = $sum + $rem*$rem*$rem; 
        $x = $x / 10; 
    } 
     
    // if true then it is an armstrong number
    if ($number == $sum)
        return 1;
     
    // not an armstrong number   
    return 0;   
}
 
$number = 407;
$flag = armstrongCheck($number);
if ($flag == 1)
    echo "$number is an Armstrong number";
else
    echo "$number is not an Armstrong number";
?>
    </body>
</html>