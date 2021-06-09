<?php
//Associative array
//key=value
//method 1
$a[0]=2;
$a['A']="Associative Array";
$a['i']="in PHP";
$a[2]=2.0;
$a['k']='k';

//method 2
//always use this method to create an array
$a = array(
    "p" => "Php",
    2 => 2,
    "A" => "Associative array",
    1 => 2.1555
);

//print value
echo "A For ".$a['A'];
echo "<br/>";

//for each loop to print all values through iteration
foreach($a as $value){
   echo"<br/>Value is $value";
}

foreach($a as $key => $value){
    echo"<br/>Key is <b>$key</b> and Value is <b>$value</b>";
    
 }

 echo "<pre>";
 print_r($a);
 echo "<pre>";
 
 echo "<pre>";
 var_dump($a);
 echo "<pre>";
 

?>