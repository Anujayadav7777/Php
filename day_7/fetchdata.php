<?php
$host="localhost";
$username="root";
$password="";
$dbname="database_1";

// Connection Function
$connection=mysqli_connect($host,$username,$password,$dbname);
//query
$q=mysqli_query($connection,"select * from tbl_user")
or die(mysqli_error($connection));

// below function will fetch data as Numerical array
$row=mysqli_fetch_row($q);

// debug
print_r($row);
echo $row[0].$row[1].$row[2].$row[3];

// numerical and associative 
$row=mysqli_fetch_array($q);

echo"<pre>";
print_r($row);
echo $row[0].$row[1].$row[2].$row[3] ;

echo $row['user_id'].$row['user_name'].$row['user_gender'].$row['user_mobile'];

?>