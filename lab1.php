<?php 
// Q1
function sortt($a){

    sort($a);
    foreach($a as $y){
        echo $y . "<br>";
    }
}
$a = array(51,14,1,21);
sortt($a);
// Q2
function IsPrime($number){
    if ($number == 1 || $number == 2)
    echo "Prime<br>";
    for ($i = 2; $i <= $number/2; $i++){
        if ($number % $i == 0)
        echo "Not Prime<br>";
    }
    echo "Prime<br>";
}
IsPrime(7);
IsPrime(9);

// Q3
function rev($a){
    echo strrev(strval($a)) . "<br>";
}
rev(1234);

// Q4
function median($arr){
    $arr_freq = array_count_values($arr);    
    arsort($arr_freq);
    $new_arr = array_keys($arr_freq);
    echo "Most frequent element is:"." ".$new_arr[0]. "<br>";
}
$arr = array(1,2,3,4,5,5,5,5,5,6);
median($arr);

// Q5
function getlastlen($words){
    $word = explode(" ",$words);
    $newword = $word[count($word)-1];
    echo strlen($newword) . "<br>";
}
getlastlen("Hello World");

// Q6
function isPower($x, $y)
{
      $a = $x;
      $b = $y;
      while ($x % $y == 0) {
       $x = $x / $y;
     }       
	if($x == 1)
    {
		echo $a. " is power of ". $b. "<br>";
    }
    else
    {
		echo $a." is not power of " .$b. "<br>";
    }
  
}
isPower(16,2);
isPower(12,2);
isPower(81,3);

// Q7
function removecommas($str){
    echo str_replace(array(",","."),"",$str) . "<br>";
}
removecommas("2,543.12");

// Q8
function check($arr){
    for ($i = 0; $i < count($arr)-2; $i++){
        if ($arr[$i] == 1 && $arr[$i+1] == 2 && $arr[$i+2] == 3){
            echo "True<br>";
            return;
        }
    }
    echo "False<br>";
}
$arr = array(1,2,3,4,5,6,7,8,9);
echo check($arr);

// Q9
function checknum($arr,$num){
    for ($i = 0; $i < count($arr); $i++){
        if ($arr[$i] == $num){
            echo "True<br>";
            return;
        }
    }
    echo "False<br>";
}
$arr = array(1,2,3,5,6,7,8,9);
echo checknum($arr,4);

// Q10

?>