<?php

//#1_a
$str = 'ahb acb aeb aeeb adcb axeb';
$k = '#a..b#';
$s = [];
$count = preg_match_all($k, $str, $s);
print_r($s);
echo "<br>";

//#1_b
$str = 'a1b2c3';
echo preg_replace_callback('#(\d+)#', 'cube' , $str);
function kub_chisla($k)
{
	$k[0] = $k[0] ** 3;
	return $k[0];
}

