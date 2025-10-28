<?php
// Если константы не заданы — подставляем значения по умолчанию
if (!defined('DB_HOST')) define('DB_HOST', 'localhost');
if (!defined('DB_NAME')) define('DB_NAME', 'milincw2_bx1');
if (!defined('DB_LOGIN')) define('DB_LOGIN', 'milincw2_bx1');
if (!defined('DB_PASSWORD')) define('DB_PASSWORD', '8FTb.q');

$DBType = "mysql";
$DBHost = DB_HOST;
$DBLogin = DB_LOGIN;
$DBPassword = DB_PASSWORD;
$DBName = DB_NAME;

$DBDebug = false;
$DBDebugToFile = false;

// Поддержка CRON
define('BX_CRONTAB_SUPPORT', true);
