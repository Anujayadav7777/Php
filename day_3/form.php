<html>
<head>
    <title>Registration Form</title>
<body>
<!---
GET: Not secure
POST: secure
Action: You can specify a page name where data will submit.
-->
<h1>Registration Form</h1>
	<form method="post" action="process.php">
	<table bg-color="grey">
	<tr>
		<td>Name:</td>
		<td><input type="text" name="txt1" required/></td>
	</tr>

    <tr>
		<td>Age:</td>
		<td> <input type="Number" name="txt2" min="18" max="100" required/></td>
	</tr> 
	
    <tr>
		<td>Email:</td>
		<td> <input type="Email" name="txt3" required/></td>
	</tr>
	
	<tr>
		<td>Branch:</td>
		<td> <input type="text" name="txt4" required/></td>
	</tr>

    <tr>
		<td>Select Time:</td>	
		<td><input type="time" name="txt5"></td>
	</tr>
	
	<tr>
		<td>Password:</td>
		<td> <input type="password" name="txt6" required/></td>
	</tr>
	
	<tr>
	<td>
	<input type="submit"/></td>
	
	
		<td>
	<input type="reset"/></td>
	</tr>
	</table>
	</form>
	</body>
</html>