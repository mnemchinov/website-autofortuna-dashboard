<?php 
/*
автор: Никита Крякер
сайт: http://it-guest.net.ru
версия скрипта: 0.1
*/
//данные о хосте, пользователе и базе данных
$host = 'localhost';
$user = 'auto'; 
$pass = 'auto432'; 
$dbname = 'auto_fo';

// подключаемся и выбираем бд, которую указали выше
if(!mysql_connect($host,$user,$pass))
  die('Не удалось подключиться к серверу MySql!');
elseif(!mysql_select_db($dbname))
  die('Не удалось выбрать БД!');
?>