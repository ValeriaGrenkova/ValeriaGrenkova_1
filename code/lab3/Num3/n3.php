<?php

if('POST' === $_SERVER['REQUEST_METHOD']) 
{
   k($_POST['Категории'],$_POST['Заголовок']);
   echo "Готово";
}

function k($Покупка,$Шары) 
{
   $file = fopen("./Категории/$Покупка/$Шары", 'w+');
   $text = "Клиент: " . $_POST['E-mail'] . "  ";

   fwrite($file,$text);
   fwrite($file,$_POST['Текст заголовка']);

   fclose($file);