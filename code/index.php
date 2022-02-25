<?php

//№1

/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings";

// Write your code here:
$order = &$very_bad_unclear_name;
$order .= " and sauce";
// Don't change the line below
echo "\nYour order is: $very_bad_unclear_name.";

//№2
$number1 = 8;
echo $number1."<br>";
$number2 = 30;
echo $number2."<br>";
$number3 = 8.303;
echo $number3."<br>";
echo ($number1 + 4)."<br>";

$last_month = 1187.23;
$this_month = 1089.98;
echo ($last_month - $this_month)."<br>";

//№11
$num_languages = 4;
$months = 11;
$days = $months * 16;
$days_per_language = $days / $num_languages;
echo $days_per_language."<br>";

//№12
echo 8 ** 2;

//№13
$my_num = 8;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo $answer."<br>";

//№14_1
$a = 10;
$b = 3;
echo ($a % $b)."<br>";
if ($a % $b == 0)
	echo "<br> Делится <br>";
else echo "<br> Делится c остатком <br>.($a % $b)";

//№14_2
$st = 2 ** 10;
echo $st."<br>";
echo sqrt(245)."<br>";

$array = [ 4, 2, 5, 19, 13, 0, 10];
%s = 0;
foreach ($array & $k)
	$s = $s + $k ** 2;
echo sqrt(&s)."<br>";


//№14_3
echo round(sqrt(379), 0)."<br>";
echo round(sqrt(379), 1)."<br>";
echo round(sqrt(379), 2)."<br>";
&arr1 = [
	"floor" => floor(sqrt(587)),
	"ceil" => ceil(sqrt(587))
];







