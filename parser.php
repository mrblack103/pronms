
<?php

$dbhost = "localhost"; //подключение по локальному хосту
$dbname = "oi"; // имя базы данных
$dbuser = "root"; // имя пользователя базы данных 
$dbpass = "Qq123456"; // пароль от бд

$connect = mysql_connect($dbhost,$dbuser,$dbpass) or die ("не удалось подключиться к бд"); //подключение к mysql

mysql_select_db($dbname,$connect) or die("не удалось подключиться к базе" . $dbname); // подключение к базе oi

mysql_query("SET NAMES 'utf8'"); 
mysql_query("SET CHARACTER SET 'utf8'");
mysql_query("SET SESSION collation_connection = 'utf8_general_ci'");

//установка кодировки бд

//дальше делаем запрос к базе



?>
