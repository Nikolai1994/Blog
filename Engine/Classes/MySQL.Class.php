<?php

/*
 * Класс для работы с базой данных MySQL
 */

class MySQL {
    var $Error = "0";
    var $ErrorText = Array();
    
    # Функция подключения к серверу MySQL
    function Connect($ServerMySQL, $UserMySQL, $PasswordMySQL) {
        $Connect = @mysql_connect($ServerMySQL, $UserMySQL, $PasswordMySQL);
        If ($Connect) {
            return true;
        } Else {
            $this->Error = "1";
            $this->ErrorText[] = "Не удалось подключиться к серверу баз данных!";
            return false;
        }
    }
    
    # Функция подключения к БД MySQL
    function Select($DataBaseMySQL) {
        If ($this->Error == "1") {
            $this->ErrorText[] = "Не удалось подключиться к базе данных!";
            return false;
        }
        $Select = @mysql_select_db($DataBaseMySQL);
        If ($Select) {
            return true;
        } Else {
            $this->Error = "1";
            $this->ErrorText[] = "Не удалось подключиться к базе данных!";
            return false;
        }
    }
    
}

?>
