<?php
$connection = mysqli_connect("localhost","root","","database_1");

if($_POST){
    $name=$_POST['txt1'];
    $gender=$_POST['txt2'];
    $mobile=$_POST['txt3'];

    $q=mysqli_query($connection,
    "insert into tbl_user (user_name,user_gender,user_mobile) values ('{$name}','{$gender}','{$mobile}')")
    or die("Error".mysqli_error($connection));

    if($q){
       echo"<script>alert('Record Added')</script>";
    }

}
?>

<html>
    <body>
        <form method="post">
        Name : <input type="text" name="txt1"/>
               </br></br>
        Gender : <select name="txt2">
              <option>Male</option>
              <option>Female</option> 
            </select>
            </br></br>
        Mobile No : <input type="number" name="txt3"/>
        </br></br>
        <input type="submit"/>
        </form>
    </body>
</html>