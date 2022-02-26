<?php

if (!isset($_SESSION["Имя"]) || !isset($_SESSION["Фамилия"]) || !isset($_SESSION["Возраст"])) 
{
    http_response_code(401);
    echo "Нет авторизации";
    return;
}

if (isset($_SESSION["Имя"]) && isset($_SESSION["Фамилия"]) && isset($_SESSION["Возраст"])) 
{
    echo "Я - {$_SESSION['Имя']} {$_SESSION['Фамилия']}. Мне {$_SESSION['Возраст']}.";
}