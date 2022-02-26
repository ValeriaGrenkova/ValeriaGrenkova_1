<?php

//#1_a
$str = 'ahb acb aeb aeeb adcb axeb';
$k = '#a..b#';
$s = [];
$count = preg_match_all($k, $str, $s);
print_r($s);
echo "<br>";