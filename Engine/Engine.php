<?php
if(!defined("INDEX")) die("<center><font style='color:#505050; font-size:12px;'>Ошибка!</font></center>");
# Файл Engine.php
# Страничный движек сайта.
# 

$action = $_GET["action"];
switch ($action) {
    case "": Echo "Главная страница";
        break;
    case "register":
        Echo "Тут будет форма регистрации...";
        break;
    default: Echo "Ошибка!";
        break;
}
?>
