<?php
//1.count() array function in PHP will count the number of elements in an array
echo"<b>count ()</b>";
echo"<br/>";
$arr = array('php','c','c++','java','Android');
echo count($arr);
echo"<br/>";

$ar = array('php',1,2,'count','elements','array');
echo count($ar);



// 2.The function will return an associative array with the array values as keys, 
// and their count is the value. It will only list distinct values as keys, and count 
// all matches found for particular values in the array
echo"<br/>";
echo"<b>array_count_values ()</b>";
echo"<br/>";
$arr = array("C","php","c","android","php","java");
$newarr = array_count_values($arr);
foreach ($newarr as $key => $value) {
echo "$key - <strong>$value</strong><br/> ";
}


//3.array_sum() array function in PHP will calculate the sum of all values 
// within an array
echo"<b>count ()</b>";
echo"<br/>";
$myarray = array(1,2,3,4,5);
echo array_sum($myarray);



// 3.array_product() array function in PHP will find the product of the 
//target array by multiplying each value as it evaluates the array, 
//compounding the values
echo"<br/>";
echo"<b>array_product()</b>";
echo"<br/>";
$myarray = array(1,2,3,4,5);
echo array_product($myarray);



// 4.array_reverse() array function in PHP will reverse the elements in an 
//array
echo"<br/>";
echo"<b>array_reverse()</b>";
echo"<br/>";
$arr = array('c', 'c++', 'java', 'android', 'php');
$revarr = array_reverse($arr);
print_r($revarr);




// 5.in_array() array function in PHP is used when we wish to look inside of an array 
// to see if a certain value exists. This function will return either "true“(1) or "false" 
// when It runs
echo"<br/>";
echo"<b>in_array()</b>";
echo"<br/>";
$arr = array('c', 'c++', 'java', 'android', 'php');
$temp = in_array('php',$arr);
echo $temp;



//6.array_rand() array function in PHP will select one or more keys from an 
// array at random
echo"<br/>";
echo"<b>array_rand()</b>";
echo"<br/>";
$arr = array('c', 'c++', 'java', 'android', 'php');
$indexofarray = array_rand($arr);//Returns Array Index 
echo $arr[$indexofarray];
echo"<br/>";
$indexofarray = array_rand($arr,2);//Returns Array Index 
foreach ($indexofarray as $key => $value) 
{
echo "$key - <strong>" . $arr[$value] . "</strong><br/>";
}




// 7.array_unique() array function in PHP will remove all duplicate 
// values from within an array
echo"<b>array_unique()</b>";
echo"<br/>";
$arr = array('c', 'c++','android', 'java', 'android', 'php');
print_r(array_unique($arr));


// 8.array_merge() array function in PHP will merge multiple 
// arrays
echo"<br/>";
echo"<b>array_merge()</b>";
echo"<br/>";
$arr1 = array('c','c++','android','java','php');
$arr2 = array(10,20,30,40,50);
$NewArr = array_merge($arr1,$arr2);
print_r($NewArr);



// 9.array_search() array function in PHP will search in an array for a specific 
// value. If found it will return the corresponding key for that value. It is a good 
// way to check to see if a value exists in an array
echo"<br/>";
echo"<b>array_search()</b>";
echo"<br/>";
$myarr = array('c', 'c++','android', 'java', 'php');
$check = array_search('android', $myarr);
echo $check; // Return Index



//10.range() array function in PHP will create a new array using a specified 
// range. You can use letter or number ranges
echo"<br/>";
echo"<b>range()</b>";

$arr = range("11", "20");
foreach($arr as $key => $value)
{
echo "<br /> $key - $value ";
}

echo"<br/>";
$a = range('a','z');
print_r($a);



//11.sort() array function in PHP will sort an array by its values from lowest to 
// highest. It will sort letters and numbers in an ascending order
echo"<br/>";
echo"<b>sort()</b>";
echo"<br/>";
$arr = array(80,60,50,40,8,74);
sort($arr);
print_r($arr);



//12.rsort() array function in PHP will sort an array in reverse or descending order. 
// This function behaves opposite the sort() function
echo"<br/>";
echo"<b>rsort()</b>";
echo"<br/>";
$arr = array(80,60,50,40,8,74);
rsort($arr);
print_r($arr);



// 13.asort() array function in PHP will sort all of the elements in an array in 
// ascending order according to the values. The indexes will be preserved.
echo"<br/>";
echo"<b>asort()</b>";
echo"<br/>";
$arr = array(80,60,50,40,8,74);
asort($arr);
print_r($arr);



// 14. ksort() array function in PHP will sort an array in ascending order according to 
// the keys.
echo"<br/>";
echo"<b>ksort()</b>";
$arr = array(
"Banana" => "Yellow", 
"Apple" => "Red", 
"Mango" => "Green");
ksort($arr);
foreach ($arr as $key => $value) {
echo "<br />$key - $value ";
}




// 15.krsort() array function in PHP will sort an array in reverse 
// according to the keys.
echo"<br/>";
echo"<b>krsort()</b>";
$arr = array(
"Banana" => "Yellow", 
"Apple" => "Red", 
"Mango" => "Green");
krsort($arr);
foreach ($arr as $key => $value) {
echo "<br />$key - $value ";
}



// 16.shuffle() array function in PHP will randomly shuffle the 
// order of the elements in an array.
echo"<br/>";
echo"<b>shuffle()</b>";

$myArray = array("Football", "Baseball", "Hockey", "Tennis", 
"Boxing");
shuffle($myArray); // Shuffle the array
foreach ($myArray as $key => $value) {
echo "<br /> $value ";
}



// 17. array_key_exists() array function in PHP will return either "true" or "false" 
// when it runs.
// It takes two parameters to operate. The first parameter is the key that you wish to 
// find out if it exists, and the second parameter is the target array to search in for 
// that key or index.
echo"<br/>";
echo"<b>array_key_exists()</b>";
echo"<br/>";
$arr = array("a" => "apple", "b" => "banana");
echo array_key_exists('a',$arr);




// 18.array_change_key_case() function is used to change all keys of a given array to lower 
// case or upper case.
// array_change_key_case (input_array, input_case)
// Either CASE_UPPER or CASE_LOWER.
// Default value : CASE_LOWER
echo"<br/>";
echo"<b>array_change_key_case()</b>";
echo"<br/>";
$arr = array(
"Banana" => "Yellow", 
"Apple" => "Red", 
"Mango" => "Green");
$uppercase = array_change_key_case($arr,CASE_UPPER);
print_r($uppercase);



// 19.array_combine() function is used to creates an array by using one 
// array for keys and another for its values.
// array_combine(array_keys, array_values)
echo"<br/>";
echo"<b>array_combine()</b>";
echo"<br/>";
$arr1 = array("Banana" , "Apple" , "Mango");
$arr2 = array("Yellow","Red", "Green");
$NewVar = array_combine($arr1, $arr2);
print_r($NewVar);

// Note : Both Array Elements Must be Equal


// 20.end() array function in PHP will return the value of the last element in an 
// array
echo"<br/>";
echo"<b>end()</b>";
echo"<br/>";

$myarr = array('c', 'c++','android', 'java', 'php');
echo end($myarr);




//21. compact() Create an array from variables and their values
echo"<br/>";
echo"<b>compact()</b>";
echo"<br/>";
$name = "akash";
$subject = "php";
$arr = compact("name", "subject");
print_r($arr);


// 22.array_flip() Flip all keys with their associated values in an array:
echo"<br/>";
echo"<b>array_flip()</b>";
echo"<br/>";
$arr = array("a" => "akash", "b" => "banana", "c" => "computer");
$fliparray = array_flip($arr);
print_r($fliparray);



//23. array_diff() Compare the values of two arrays, and return the differences:
echo"<br/>";
echo"<b>array_flip()</b>";
echo"<br/>";
$a=array("akash","c","c++","java","php","android");
$b=array("akash","c","java","php");
$diff = array_diff($a, $b);
print_r($diff);




// 24.array_intersect() The array function in PHP will create a new array from comparing arrays 
// against each other to see if any values match. 
//  It will return an associative array with all of the matches found in the arrays 
// you compare
echo"<br/>";
echo"<b>array_intersect()</b>";
echo"<br/>";
$arr1 = array(0=>"Sunday",1=>"Monday",2=>"Tuesday");
$arr2 = array(3=>"Tuesday",4=>"Sunday",5=>"Thursday");
print_r(array_intersect($arr1,$arr2));


// 25.array_values ()  array_values() array function in PHP will return a new array made 
// up of the values from a target array. 
// The resulting array will be a numerically indexed array.
echo"<br/>";
echo"<b>array_values()</b>";

$arr = array("i"=>"c","want"=>"c++","learn"=>"php");
$myarr = array_values($arr);
foreach($myarr as $key => $value) {
echo " <br />$key - $value";
}



// 26.array_push() function inserts one or more elements to the end of a 
// Numerical array
// array_push(array,value1,value2...)
echo"<br/>";
echo"<b>array_push()</b>";
echo"<br/>";
$a=array("c","c++");
array_push($a,"java","php");
print_r($a);



// 27.array_pop() function deletes the last element of an array.
// array_pop(array)
echo"<br/>";
echo"<b>array_pop()</b>";
echo"<br/>";
$a = array("c", "c++", "Java", "PHP", "ASP");
array_pop($a); //Remove
print_r($a);
echo"<br/>";
array_pop($a); //Remove
print_r($a);




// 28.explode() Explode function is used to break a string into an array. 
// String to Array
//  explode($delimiter, $string);
echo"<br/>";
echo"<b>explode()</b>";
echo"<br/>";
$mystring = "I Love PHP Language";
$arr = explode(" ",$mystring);
print_r($arr);


// 29.implode()  Php implode function is used to convert an array into string. It return output as 
// a string.
// Array to String
echo"<br/>";
echo"<b>implode()</b>";
echo"<br/>";
$arr = array("i","love","php","language");
$mystring = implode(" ", $arr);
echo $mystring;
 








?>