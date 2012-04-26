<?php
# Подключаем классы
include("Engine/Classes/Global.Class.php");
include("Engine/Classes/MySQL.Class.php");
include("Engine/Classes/Main.Class.php");

# Инициализируем классы (Важно соблюдение порядка инициализации!)
$Global = new GlobalClass;
$MySQL = new MySQL;
$Main = new Main;

include("Engine/EngineX.php");

Echo "<html>
<head>
    <title>Разработка движка блога..".$PageTitle."</title>
    <link rel=\"stylesheet\" type=\"text/css\" media=\"all\" href=\"/Styles/styles.css\" />
</head>
<body>
<div id=\"container\">
<div id=\"header\">Проект в разработке =)</div>
<div id=\"content\">";
include("Engine/Engine.php");
Echo "
</div>
<div id=\"right_column\">
    Меню<br />
    <a href=\"/\">Главная</a><br />
    <a href=\"?action=register\">Регистрация</a>
</div>
<div id=\"footer\">Версия системы ".$Global->EngineVersion."</div>
</div>
</body>
</html>";
?>