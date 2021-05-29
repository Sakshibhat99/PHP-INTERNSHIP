<?php

  $a = $_POST['txt1'];
  $b = $_POST['txt2'];
   $c = $_POST['txt3'];
   $d = $_POST['txt4'];
    $e = $_POST['txt5'];
    
    $total=$a+$b+$c+$d+$e;
    $percentage=$total/5;
    
    
if($percentage>=60)
{
echo   "First division ";
}
if($percentage>=50 and $percentage<60)
{
echo "  Second division";
}
if($percentage>=40 and $percentage<50)
{
echo "  Third division";

}

if($percentage<40)
{
echo "Fail";

}
 

echo "</br>";
if($a>=35 and $b>=35 and $c>=35 and $d>=35 and $e>=35)
{
$result= " Congratulations!!!! You have passed this Exam.";
}
else
{
$result="Sorry!!! You have not cleared this Exam. ";
}

echo $result;


?>

