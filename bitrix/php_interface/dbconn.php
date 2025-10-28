<?php
// Поддержка crontab
define('BX_CRONTAB_SUPPORT', true);

$DBHost = getenv('DB_HOST');
$DBLogin = getenv('DB_USER');
$DBPassword = getenv('DB_PASSWORD');
$DBName = getenv('DB_NAME');

define("DBPersistent", false);
define("DBDebug", false);
define("DBType", "mysql");
define("DBDebugToFile", false);

// Подключение ядра Битрикс
if(!defined("BX_UTF"))
    define("BX_UTF", true);

require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
