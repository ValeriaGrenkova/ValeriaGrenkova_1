<?php

if (!isset($_POST["Имя"]) || !isset($_POST["Фамилия"]) || !isset($_POST["Возраст"])) 
{
    http_response_code(400);
    echo "Ошибка";
    return;
}

if (!session_start()) 
{
    http_response_code(500);
    echo "Ошибка сервера";
    return;
}
$_SESSION["Имя"] = $_POST["Имя"];
$_SESSION["Фамилия"] = $_POST["Фамилия"];
$_SESSION["Возраст"] = $_POST["Возраст"];
header("Refresh:3; url=n2b.php");