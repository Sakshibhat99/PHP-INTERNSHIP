<?php
//Associative Array
//Key = Value

//Method 1
$a[0]=250;  
$a['S']="Sakshi"; 
$a['www']="WOrld Wide Web"; 
$a[3]="S"; 
$a[4]="25"; 

//Method 2
//Aways use this method to create an array
$a= array (
 0 => 250,
"S" => "Sakshi",
"www" => "World Wide Web",
3 => "S",
4 => 25,  
);

//Print Value using for each loop
echo "S for ".$a['S'];

foreach ($a as $value) {
    echo "<br/> Value is $value ";    
}
   
foreach ($a as $key => $value) {
    echo "<br/>key is <b>$key</b> and Value is <b>$value</b><br/>";    
}

//Print Value using while loop

$keys = array_keys($a);
rsort($keys);

while (!empty($keys)) {
    $key = array_pop($keys);
    echo '<br />'.$key . ' = ' . $a[$key] . '<br />';
};


//3 Inbuilt Functions to debug an Array
echo"<pre>";
print_r($a);
echo"<pre>";
echo"<pre>";
var_dump($a);
echo '<pre>';
   
?>
