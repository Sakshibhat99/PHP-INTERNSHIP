<html>
<head>
<head><title>MARKSHEET PROGRAM</title></head>
<body>
    
 <?php
$physics = 80;
$chemistry = 97;
$math = 63;
$english = 78;
$hindi = 87;

$total = NULL;
$average = NULL;
$percentage = NULL;

$total = $physics + $chemistry + $math + $english + $hindi;// Calculate the total
$average = $total / 5.0; // Calculate the average
$percentage = ($total / 500.0) * 100; // Calculate the percentage

echo "<br> The Total marks   = " . $total . "/500\n";
echo " <br> The Average marks = " . $average . "\n";
echo "<br> The Percentage    = " . $percentage . "%";

?>
</head>
</html>




