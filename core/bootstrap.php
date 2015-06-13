<?php
require_once __DIR__ . "/config.inc.php";
require_once __DIR__ . "/../vendor/autoload.php";

use RedBeanPHP\Facade as R;

if (empty(R::$currentDB)) {
    $dns = sprintf('%s:host=%s;dbname=%s', DB_TYPE, DB_HOST, DB_NAME);
    R::setup($dns, DB_USER, DB_PASSWORD);
}

R::close();

