<?php 
echo "Q1 : " . "<br>";
function sortt($a){

    sort($a);
    foreach($a as $y){
        echo $y . "<br>";
    }
}
$a = array(51,14,1,21);
echo sortt($a);
echo "Q2 : " . "<br>";
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
echo "Q3 : " . "<br>";
function rev($a){
    return strrev(strval($a)) . "<br>";
}
echo rev(1234);
echo "Q4 : " . "<br>";
function median($arr){
    $arr_freq = array_count_values($arr);    
    arsort($arr_freq);
    $new_arr = array_keys($arr_freq);
    return "Most frequent element is:"." ".$new_arr[0]. "<br>";
}
$arr = array(1,2,3,4,5,5,5,5,5,6);
echo median($arr);
echo "Q5 : " . "<br>";
function getlastlen($words){
    $word = explode(" ",$words);
    $newword = $word[count($word)-1];
    return strlen($newword) . "<br>";
}
echo getlastlen("Hello World");
echo "Q6 : " . "<br>";
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
echo "Q7 : " . "<br>";
function removecommas($str){
    return str_replace(array(",","."),"",$str) . "<br>";
}
echo removecommas("2,543.12");
echo "Q8 : " . "<br>";
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
echo "Q9 : " . "<br>";
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
echo "Q10 : " . "<br>";
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
echo checknumfrom100(78,92) . "<br>";
echo "Q11 : " . "<br>";
function copystr($str){
    if(strlen($str) < 2){
        return $str . "<br>";
    }
    return substr($str,0,2) . substr($str,0,2) . substr($str,0,2) . substr($str,0,2) . "<br>";
}
echo copystr("C Charp");
echo copystr("JS");
echo copystr("a");
echo "Q12 : " . "<br>";
function swapstr($str){
    if(strlen($str) < 2){
        return $str . "<br>";
    }
    return $str[strlen($str)-1] . substr($str,1,strlen($str)-2) . $str[0] . "<br>";
}
echo swapstr("abcd");
echo swapstr("a");
echo swapstr("xy");
echo "Q13 : " . "<br>";
function checkfor30($num1,$num2){
    echo $num1 . ", " . $num2 . " : ";
    if($num1 == 30 || $num2 == 30 || $num1 + $num2 == 30){
        return "True<br>";
    }
    return "False<br>";
}
echo checkfor30(30,0);
echo checkfor30(25,5);
echo checkfor30(20,30);
echo checkfor30(20,25);
echo "Q14 : " . "<br>";
function sumortriple($num1,$num2){
    echo $num1 . ", " . $num2 . " : ";
    if($num1 == $num2){
        return ($num1 + $num2) * 3 . "<br>";
    }
    return $num1 + $num2 . "<br>";
}
echo sumortriple(1,2);
echo sumortriple(3,2);
echo sumortriple(2,2);
echo "Q15 : " . "<br>";
echo "<br>";
for($i = 0;$i<5;$i++) {
    for($j = 0  ;$j<=$i;$j++){
        echo "* ";
    }
    echo "<br>";
}
echo "Q16 : " . "<br>";
echo "<br>";
for($i = 0;$i<5;$i++) {
    for($j = 0  ;$j<=$i;$j++){
        echo "* ";
    }
    echo "<br>";
}
for($i = 5;$i>0;$i--) {
    for($j = 0 ;$j< $i ;$j++){
        echo "* ";
    }
    echo "<br>";
}
echo "Q17 : " . "<br>";
$colors = array('white', 'green', 'red');
echo "<ul>";
foreach($colors as $color){
    echo "<li>" . $color . "</li>";
}
echo "</ul>";
echo "Q18 : " . "<br>";
for($i = 1;$i<=6;$i++) {
    for($j = 1;$j<=6;$j++){
        echo $i*$j . " ";
    }
    echo "<br>";
}
echo "Q19 : " . "<br>";
function occur($str,$end){
    echo $str.", ". $end. " : ";
    return substr($str,strlen($str) - strlen($end)) == $end ? "true" : "false";
}
echo occur("Python","on") . "<br>";
echo occur("JavaScript","php") . "<br>";
?>