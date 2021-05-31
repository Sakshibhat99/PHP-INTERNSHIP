<?php
//Numerical Array
//Method 1
$a[0]=250;  
$a[1]=300; 
$a[2]=36.78; 
$a[3]="S"; 
$a[4]="25"; 

//Method 2 //iNDEX DYNAMIC ARRAY
$a[]=250;  
$a[]=300; 
$a[]=36.78; 
$a[]="S"; 
$a[]="25"; 

//Method 3
//ALWAYS USE THIS METHOD TO CREATE AN ARRAY
$a = array(250,300,36.78,"S","25","Sakshi",57);  

//Print Array Value
echo $a[5];

//Print Whole Array
for($i=0;$i<count($a);$i++){
    echo"</br>".$a[$i];
}

//3 inbulit functions to debug an array
echo"<pre>";
print_r($a);
echo"<pre>";
echo"<pre>";
var_dump($a);
echo '<pre>';

?>
