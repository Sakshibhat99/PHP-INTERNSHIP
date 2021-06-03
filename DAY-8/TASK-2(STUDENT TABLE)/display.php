<?php
//DB Connection
$connection = mysqli_connect("localhost", "root", "" , "db_internship");
//Query
$q= mysqli_query($connection,
             "select * from tbl_student")or die("Error". mysqli_error($connection));

echo"<table border='1'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>FirstName</th>";
echo "<th>LastName</th>";
echo "<th>D-O-B</th>";
echo "<th>Email</th>";
echo "<th>Password</th>";
echo "<th>Mobile</th>";
echo "<th>Address</th>";
echo "<th>City</th>";
echo "<th>Gender</th>";
echo "<th>Bloodgroup</th>";
echo "<th>Hobbies</th>";
echo "<th>Action</th>";
echo "</tr>";

$i =0;
while($row = mysqli_fetch_array($q)){
    $i++;
    echo"<tr>";
    echo"<td>$i</td>";
    echo"<td>{$row['st_first_name']}</td>";
    echo"<td>{$row['st_last_name']}</td>";
    echo"<td>{$row['st_d_o_b']}</td>";
    echo"<td>{$row['st_email']}</td>";
    echo"<td>{$row['st_password']}</td>";
    echo"<td>{$row['st_mobile']}</td>";
    echo"<td>{$row['st_address']}</td>";
    echo"<td>{$row['st_city']}</td>";
    echo"<td>{$row['st_gender']}</td>";
    echo"<td>{$row['st_bloodgroup']}</td>";
    echo"<td>{$row['st_hobbies']}</td>";
   
   
    echo"<td><a href = 'edit.php?id={$row['st_id']}'>Edit</a> |<a href ='delete.php?deleteid={$row['st_id']} '>Delete</td>";
    echo"</tr>";
  
}
echo"</table>";

echo "<a href='insert.php'>Add Record</a>";

 ?> 


