 <?php
//DB Connection
$connection = mysqli_connect("localhost", "root", "" , "db_internship");
//Query
$q= mysqli_query($connection,
             "select * from tbl_user")or die("Error". mysqli_error($connection));
//Function 1 to fetch data as Numerical Array
$row = mysqli_fetch_row($q);
//Debug
print_r($row);
echo $row[0].$row[1].$row[2].$row[3];

//Function 2 Numerical and Associative(Best option)
$row = mysqli_fetch_array($q);
echo "<pre>";
print_r($row);
echo $row[0].$row[1].$row[2].$row[3];
echo $row['user_id'].$row['user_name'].$row['user_gender'].$row['user_mobile'];

