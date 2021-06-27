<?php

$db_host = 'localhost'; // ваш хост
$db_user = 'root'; // пользователь бд
$db_pass = ''; // пароль к бд
$db_name = 'Klinov_site'; // ваша бд

$link = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(mysqli_connect_errno())
{
echo 'Ошибка в подключении к базе данных ('.mysqli_connect_errno().'): '.mysqli_connect_error();
exit();
}