<?php
define('BASE_URI',str_replace('\\','/',substr(__DIR__,strlen($_SERVER['DOCUMENT_ROOT']))));
require_once("./Core.php");

$app= new Core\Core();
$app->run("");
