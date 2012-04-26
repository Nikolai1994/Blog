<?php

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
