<p>1)count()Function</p>
<?php
$arr = array('250','Sakshi','Wlorld Wide Web','S','25'); 
echo count($arr);
?>

<p>2)array_count_values()Function</p>
<?php
$arr = array('250','Sakshi','Wlorld Wide Web','S','25');
$newarr = array_count_values($arr);
//Print using foreach loop
foreach ($newarr as $key => $value) {
echo "<br/>$key - <strong>$value</strong> ";
}
?>
 
<p>3)array_sum()Function</p>
<?php
$myarray = array('250','Sakshi','Wlorld Wide Web','S','25');
echo array_sum($myarray);
?>

<p>4)array_product()Function</p>
<?php
$myarray = array('250','Sakshi','Wlorld Wide Web','S','25');
echo array_product($myarray);
?>

<p>5)array_reverse( )Function</p>
<?php
$arr = array('250','Sakshi','Wlorld Wide Web','S','25');
$revarr = array_reverse($arr);
print_r($revarr);
?>
 
<p>6)in_array( ) Function</p>
<?php
$arr = array('250','Sakshi','Wlorld Wide Web','S','25');
$temp = in_array('Sakshi',$arr); echo $temp;
?>

<p>7)array_rand( )Function</p>
 <?php
$a=array("red","green","blue","yellow","brown");
$random_keys=array_rand($a,3);
echo $a[$random_keys[0]]."<br>";
echo $a[$random_keys[1]]."<br>";
echo $a[$random_keys[2]];
?> 
 



<p>8)array_unique( ) Function</p>
<?php
$arr = array('250','Sakshi','Wlorld Wide Web','S','25');
print_r(array_unique($arr));
?>	

<p>9)array_merge( ) Function</p>
<?php
$arr1 = array('250','Sakshi','Wlorld Wide Web','S','25');
$arr2 = array(10,20,30,40,50);
$NewArr = array_merge($arr1,$arr2); print_r($NewArr);
?>
 
<p>10)array_search( ) Function</p> 
<?php
$myarr = array('250','Sakshi','Wlorld Wide Web','S','25');
$check = array_search('Sakshi', $myarr); 
echo $check; // Return Index
?>

<p>11)range( ) Function</p> 
<?php
$arr = range("11", "20");
//Print Valu using foreach loop
foreach($arr as $key => $value)
{
echo "<br /> $key - $value ";
}
?>




 
<p>12)sort( ) Function</p>
<?php
$arr = array(80,60,50,40,8,74); 
sort($arr);
print_r($arr);
?>

 
<p>13)rsort( ) Function</p>
<?php
$arr = array(80,60,50,40,8,74); rsort($arr);
print_r($arr);
?>

 
<p>14)asort( ) Function</p>
<?php
$arr = array(80,60,50,40,8,74); asort($arr);
print_r($arr);
?>

 
<p>15)ksort ( ) (Key Sort) Function</p>
<?php
$arr = array(
"Flower" => "Red", 
"Cloud" => "Blue",
"Rainbow" => "7 Colours");
ksort($arr);
foreach ($arr as $key => $value) { echo "<br />$key - $value ";
}
?>

 
<p>16)krsort ( ) Key Reverse Sort Function</p>
<?php
$arr = array(
"Flower" => "Red", 
"Cloud" => "Blue",
"Rainbow" => "7 Colours");
krsort($arr);
//Print Value using foreach loop
foreach ($arr as $key => $value) {
    echo "<br />$key - $value ";
}
?>
 

<p>17)shuffle( ) Function</p>
<?php
$myArray = array('250','Sakshi','Wlorld Wide Web','S','25');
shuffle($myArray);	// Shuffle the array foreach ($myArray as $key => $value) {
echo "<br /> $value ";
?>
 
<p>18)array_key_exists( ) Function</p>
<?php
$arr = array("a" => "apple", "b" => "banana"); 
echo array_key_exists('a',$arr);
?>


<p>19)array_change_key_case() Function</p>
<?php
$arr = array(
"Flower" => "Red", 
"Cloud" => "Grey",
"Sky" => "Blue");
$uppercase = array_change_key_case($arr,CASE_UPPER); print_r($uppercase);
?>
 
 
<p>20)array_combine() Function</p>
<?php
$arr1 = array("Flower" , "Cloud" , "Sky");
$arr2 = array("Red","Grey","Blue");
$NewVar = array_combine($arr1, $arr2);
print_r($NewVar);
?>

 
<p>21)end() Function</p>
<?php
$myarr = array('250','Sakshi','Wlorld Wide Web','S','25');
echo end($myarr);
?>


<p>22)compact() Function</p>
<?php 
$name = "Sakshi";
$subject = "php";
$arr = compact("name", "subject");
print_r($arr);
?>
 

<p>23)array_flip()Function</p>
<?php
$arr = array("s" => "sakshi", "b" => "bhat", "p" => "php");
$fliparray = array_flip($arr);
print_r($fliparray);
?>	

 
<p>24)array_diff() Function</p>
<?php
$a=array('250','Sakshi','Wlorld Wide Web','S','25');
$b=array("Sakshi","s","25");
$diff = array_diff($a, $b);
print_r($diff);
?>	

 
<p>25)array_intersect() Function</p>
<?php
$arr1 = array(0=>"Jasmine",1=>"Lotus",2=>"Rose");
$arr2 = array(3=>"Rose",4=>"Jasmine",5=>"Lily");
print_r(array_intersect($arr1,$arr2));
?>
 
 
<p>26)array_values( ) Function</p>
<?php
$arr = array("a"=>"I","b"=>"want","c"=>"to","d"=>"learn","e"=>"php");
$myarr = array_values($arr); 
foreach($myarr as $key => $value) {
echo " <br />$key - $value";
}
?>
 

<p>27)array_push()Function</p>
<?php
$a=array("c","c++");
array_push($a,"java","php");
print_r($a);
?>	)
 
<p>28)array_pop() Function</p>
<?php
$a = array('250','Sakshi','Wlorld Wide Web','S','25');
array_pop($a); //Remove 
print_r($a); 
array_pop($a); //Remove 
print_r($a);
?>
 
<p>29)explode()Function</p>
<?php
$mystring = "I Love PHP Language";
$arr = explode(" ",$mystring); print_r($arr);
?>
 
 
<p>30)implode()Function</p>
<?php 
$arr = array("i","love","PHP","language");
$mystring = implode(" ", $arr); echo $mystring;
?>
 
   