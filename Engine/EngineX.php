<?php

# Файл EngineX.php
# Предназначен для установки заголовков страниц,
# и вызова определённых действий при переходе на
# определённую страницу.

$action = $_GET["action"];
$Next = " » ";

switch($action) {
    case "": $PageTitle = $Next."Главная"; break;
    case "register": $PageTitle = $Next."Регистрация"; break;
    default: $PageTitle = $Next."Ошибка!"; break;
}
?>
