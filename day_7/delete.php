<?php
$host="localhost";
$username="root";
$password="";
$dbname="database_1";

// Connection Function
$connection=mysqli_connect($host,$username,$password,$dbname);

$id=$_GET['deleteid'];

$q=mysqli_query($connection,"update tbl_user set is_delete=1 where user_id='{$id}' ")
or die(mysqli_error($connection));

if($q){
    echo"<script>alert('Record deleted');window.location='tbl2.php';</script>";
 }


 ?>