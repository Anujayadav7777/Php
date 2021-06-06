<?php 
if(isset($_POST['submit']))
{
$a = $_POST['txt1'];
$b = $_POST['txt2'];
$c = $_POST['txt3'];
$d = $_POST['txt4'];
$e = $_POST['txt5'];


$sum = $c + $d + $e;
$per = ($sum/300)*100 ;

if($per>=90){
    $grade = 'A';
}elseif($per<80){
    $grade = 'B';
}elseif($per<60){
    $grade = 'C';
}elseif($per<50){
    $grade ='D';
}else{
    $grade='Fail';
}
echo"<h1 align=center>Marksheet</h4>";
echo"<h4 align=center>Student Name : $a</h4> ";
echo"<h4 align=center>Branch : $b</h4> ";
echo "<h4 align=center>All the marks is shown in below table</h2>";
echo "<table border=1 align=center>";
echo "<tr><td>Artificial Intelligence :</td><td>$c</td></tr>";
echo "<tr><td>Advance Web Programming :</td><td>$d</td></tr>";
echo "<tr><td>Software Engineering :</td><td>$d</td></tr>";

echo "<tr><td>Total marks :</td><td>$sum</td></tr>";
echo "<tr><td>Percentage :</td><td>$per</td></tr>";
echo "<tr><td>Grade :</td><td>$grade</td></tr>";


echo "</table><br/>";

}
?>