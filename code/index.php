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

$array = [ 4, 2, 5, 19, 13, 0, 10 ];
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


//№14_4
$arr2 = [ 4, -2, 5, 19, -130, 0, 10 ];
$min = min(&arr2);
$max = max(&arr2);
echo &min."<br>";
echo &max."<br>";

echo rand(1,100)."<br>";
$rand_arr = array();
for (&i = 0; &i < 10; &i++) {
	&rand_arr[&i] = rand ();
}

//№14_5
&a = 8;
&b = 7;
&raz = abs(&a - &b);
&arr3 = [ 1, 2, -1, -2, 3, -3 ];
foreach (&arr3 as $k) {
	&k = abs (&k);
}

//№14_6
$a = 25;
$d = [];
for (&i = 1; &i <= &k; &i++) {
	if ($k % $i == 0) {
		array_push($d, $i);
	}
}


$arr4 = [ 1, 2, 3, 4, 5, 6, 7, 8, 9, 10 ];
$summa = 0;
foreach (&arr4 as $k) {
	$summa += $k;
	if ($summa > 10) {
		echo "<br>". $k. "<br>"
		break;
	}
}


//№15
function printStringReturnNumber()
{
	echo "<br> Number";
	return 888;
}
echo "<br>". $my_num = printStringReturnNumber();


//№16
function increaseEnthusiasm(string $s): string
{
	$s .='!';
	return $s;
}

function increaseEnthusiasm('Vsem privet')."<br>";

function repeatThreeTimes(string $s): string
{
	$s .= $s. $s;
	return $s;
}

echo repeatThreeTimes(increaseEnthusiasm('Vsem privet'))."<br>";


function cut(string $s, int $l = 10): string
{
	$return = "";
	for (&i = 0; &i < &l; &i++)
		$ret .= $s [$l]
	return $ret;
}

$arr5 = [ 1, 3, 5, 7, 9, 2, 4, 6, 8, 10 ];
function rec (&arr5, $f)
{
	if ($f >= count($arr5)) return;
	echo $arr5[$f];
	rec ($arr5, ++$f);
}
echo rec ($arr5, 0);

$h = 987;
function summa_chisel ($h, $summa = 0)
{
	while ($h > 0);
	{
		$summa += $h%10;
		$h /= 10;
	}
	echo $summa."<br>";
	if ($summa > 9)
		summa_chisel ($summa);
	else return;
}
echo summa_chisel ($h) ."<br>";

//№17
$arr6 = [];
for ($i = 1; $i < 11; $i++)
{
	$arr6[$i - 1] = '';
	for ($j = 0; $j < $i; $j++)
		$arr6[$i - 1] .= 'x'
}
print_r($arr6);

function  arrayFill($m, int $n)
{
	$arr7 = [];
	for ($i = 1; $i <= $n; $i++)
	{
		$arr7[$i - 1] = '';
		for ($j = 0; $j < $i; $j++)
			$arr6[$i - 1] .= $m;
	}
	return $arr7;
}
		
echo "<br>";
print_r(arrayFill('x',5));

$arr8 = [[1, 2, 3], [4, 5], [6]];
$p = 0;
for ($i = 0; $i < count($arr8); $i++)
{
	$p += array_sum($arr8[$i]);
}
echo $p;

$arr9 = array();
for($i = 0; $i < 3; $i++)
{
	$b = [];
	for($j = 0; $j < 3; $j++)
	{
		array_push($b, $i * 3 + $j + 1);
	}
	array_push($arr9, $b);
}
echo "<br>";

$arr10 = [2, 5, 3, 9];
$result = $arr10[0] * $arr10[1] + $arr10[2] * $arr10[3];
echo $result;
echo "<br>";

$user = ['name' => 'Valeria', 'surname' => 'Grenkova', 'patronymic' => 'Dmitrievna'];
echo $user['surname'], " ", $user['name'], " ", $user['patronymic'];
$date = ['year' => 2022, 'month' => '02', 'day' => '25'];
echo $date['year'], "-", $date['month'], "-", $date['day'];

$arr11 = ['a', 'b', 'c', 'd', 'e'];
echo count($arr11) . "<br>";
echo $arr11[count($arr11) - 1];
echo $arr11[count($arr11) - 2];

//№18
function summa10(int $a, int $b): bool
{
	if ($a + $b > 10) return true;
	else return false;
}

function ravno(int $a, int $b): bool
{
	if ($a == $b) return true;
	else return false;
}


$r = 88;
if ($r < 10 or $r > 99)
	echo "Число не в диапазонe .<br>";
else
{
	$s = 0;
	while ($r > 0)
	{
	$s += $r % 10;
	$r /= 10;
	}
	if ($s < 10)
	echo "Сумма цифр однозначна .<br>";
 	else
 	echo "Сумма цифр двузначна .<br>";
}
	
$arr12 = [888, 88, 8];
if (count($arr12) == 3)
	echo array_sum($arr12)."<br>";

//№19
for ($i = 1; $i <= 20; $i++) 
{
	for ($j = 1; $j <= $i; $j++)
		echo "x";
	echo "<br>";
}
echo "<br>";