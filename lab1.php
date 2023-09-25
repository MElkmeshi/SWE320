<?php 
// Q1
function sortt($a){

    sort($a);
    foreach($a as $y){
        return $y . "<br>";
    }
}
$a = array(51,14,1,21);
echo sortt($a);
// Q2
function IsPrime($number){
    if ($number == 1 || $number == 2)
    return "Prime<br>";
    for ($i = 2; $i <= $number/2; $i++){
        if ($number % $i == 0)
        return "Not Prime<br>";
    }
    return "Prime<br>";
}
echo IsPrime(7);
echo IsPrime(9);

// Q3
function rev($a){
    return strrev(strval($a)) . "<br>";
}
echo rev(1234);

// Q4
function median($arr){
    $arr_freq = array_count_values($arr);    
    arsort($arr_freq);
    $new_arr = array_keys($arr_freq);
    return "Most frequent element is:"." ".$new_arr[0]. "<br>";
}
$arr = array(1,2,3,4,5,5,5,5,5,6);
echo median($arr);

// Q5
function getlastlen($words){
    $word = explode(" ",$words);
    $newword = $word[count($word)-1];
    return strlen($newword) . "<br>";
}
echo getlastlen("Hello World");

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
        return $a. " is power of ". $b. "<br>";
    }
    else
    {
		return $a." is not power of " .$b. "<br>";
    }
  
}
echo isPower(16,2);
echo isPower(12,2);
echo isPower(81,3);

// Q7
function removecommas($str){
    return str_replace(array(",","."),"",$str) . "<br>";
}
echo removecommas("2,543.12");

// Q8
function check($arr){
    for ($i = 0; $i < count($arr)-2; $i++){
        if ($arr[$i] == 1 && $arr[$i+1] == 2 && $arr[$i+2] == 3){
            return "True<br>";
        }
    }
    return "False<br>";
}
$arr = array(1,2,3,4,5,6,7,8,9);
echo check($arr);

// Q9
function checknum($arr,$num){
    for ($i = 0; $i < count($arr); $i++){
        if ($arr[$i] == $num){
            return "True<br>";
        }
    }
    return "False<br>";
}
$arr = array(1,2,3,5,6,7,8,9);
echo checknum($arr,4);

// Q10
function checknumfrom100($num1,$num2){
    if($num1 == $num2 ){
        return 0;
    }
    if($num1 > 100 || $num2 > 100){
        return $num1 > $num2 ? $num1 : $num2;
    }
    $tmp1 = $num1;
    $tmp2 = $num2;
    while($tmp1 != 100 && $tmp2 != 100){
        $tmp1++;
        $tmp2++;
    }
    return $tmp1 == 100 ? $num1 : $num2;
}
echo checknumfrom100(78,92);

//Q11

?>