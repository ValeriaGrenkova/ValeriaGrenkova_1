<?php 

$a = scandir("Категории/Дом"); 
$b = scandir("Категории/Работа"); 
$c = scandir("Категории/Развлечения"); 

echo "Дом: ";
foreach ($a as $i) 
{
    if($i > 1)
    echo $i, "<br>";
}

echo "Работа: ";
foreach ($b as $i) 
{
    if($i > 1)
    echo $i, "<br>";
}

echo "Развлечения: ";
foreach ($c as $i) 
{
    if($i > 1)
    echo $i, "<br>";
}
