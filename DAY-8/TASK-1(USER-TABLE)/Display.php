<?php
//DB Connection
$connection = mysqli_connect("localhost", "root", "" , "db_internship");
//Query
$q= mysqli_query($connection,
             "select * from tbl_user")or die("Error". mysqli_error($connection));

echo"<table border='1'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Name</th>";
echo "<th>Gender</th>";
echo "<th>Mobile</th>";
echo "<th>Action</th>";
echo "</tr>";

$i =0;
while($row = mysqli_fetch_array($q)){
    $i++;
    echo"<tr>";
    echo"<td>$i</td>";
    echo"<td>{$row['user_name']}</td>";
    echo"<td>{$row['user_gender']}</td>";
    echo"<td>{$row['user_mobile']}</td>";
    echo"<td><a href = 'edit.php?id={$row['user_id']}'>Edit</a> | <a href ='delete.php?deleteid={$row['user_id']} '>Delete</a></td>";
    echo"</tr>";
  
}
echo"</table>";

echo "<a href='insert.php'>Add Record</a>";

 ?> 

