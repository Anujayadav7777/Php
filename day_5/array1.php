<?php
//Numerical array
//Method 1

$a[0]=1;
$a[1]="Numerical";
$a[2]="Array";
$a[3]="in php";
$a[4]=1.00;


//method 2
//dynamic index

$a[]="Numercal";
$a[]="Array";
$a[]="in php";
$a[]=2;
$a[]=1.0;

//method 3
//alaways use this method to create an array
$a= array("Php", "array",1,"Numerical",3.11);
 
//print array value
echo $a[0];
echo "<br/>";
echo "<br/>";


//print whole array
for($i=0;$i<count($a);$i++){
   echo $a[$i];
   echo "<br/>";
}
   
echo "<br/>";

//sum of array
$sum = array_sum($a);
echo $sum;

echo "<pre>";
print_r($a);
echo "<pre>";

echo "<pre>";
var_dump($a);
echo "<pre>";

//for each loop to print all values through iteration
foreach($a as $value){
    echo"<br/>Value is $value";
 }

?>