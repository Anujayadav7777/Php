<?php
$host="localhost";
$username="root";
$password="";
$dbname="database_1";

// Connection Function
$connection=mysqli_connect($host,$username,$password,$dbname);

if($_POST){
    $name=$_POST['txt1'];
    $gender=$_POST['txt2'];
    $age=$_POST['txt3'];
    $date=$_POST['txt4'];
    $email=$_POST['txt5'];
    $mobile=$_POST['txt6'];
    $address=$_POST['txt7'];
    $password=$_POST['txt8'];
    $city=$_POST['txt9'];
    

$q=mysqli_query($connection,"insert into table1_student( std_name, std_gender, std_age, std_date, std_email, std_mobile, std_address, std_password, std_city) values ('{$name}','{$gender}','{$age}','{$date}','{$email}','{$mobile}','{$address}',
'{$password}','{$city}')")
  or die("Error".mysqli_error($connection));

  if($q)
  {
      echo"<script>alert('Record Added')</script>";
  }

}
?>

<html>
   <body>
      <h2>Registration Form for Students</h2>
<form method="post">
<table>
	<tr>
		<td>Name : </td>
		<td><input type="text" name="txt1" required/></td>
	</tr>
    <tr>
        <td>Gender : </td>
        <td><select name="txt2">
              <option>Male</option>
              <option>Female</option> 
            </select></td>
    <tr>
		<td>Age : </td>
		<td> <input type="Number" name="txt3" min="18" max="100" required/></td>
	</tr> 
	
    <tr>
		<td>Date : </td>
		<td> <input type="date" name="txt4" required/></td>
	</tr> 
	
    <tr>
		<td>Email : </td>
		<td> <input type="Email" name="txt5" required/></td>
	</tr>
	
	<tr>
		<td>Mobile : </td>
		<td> <input type="number" name="txt6" required/></td>
	</tr>

    <tr>
		<td>Address : </td>	
		<td><input type="text" name="txt7"></td>
	</tr>

    <tr>
		<td>Password : </td>
		<td> <input type="password" name="txt8" required/></td>
	</tr>
	
    <tr>
		<td>City : </td>	
		<td><input type="text" name="txt9"></td>
	</tr>

	
	<tr>
	<td>
	<input type="submit"/></td>
    </tr>
	
	</table>
	</form>
    </body>
</html>