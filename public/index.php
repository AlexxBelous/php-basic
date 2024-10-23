<?php

require_once __DIR__ . '/../vendor/autoload.php';
use myfrm\Test;

define("ROOT", dirname(__DIR__));
define("PUBLIC", ROOT . "/public");
define("CORE", ROOT . "/myfrm/core");
define("APP", ROOT . "/app");
define("CONTROLLERS", APP . "/controllers");
define("VIEWS", APP . "/views");
define("PATH", "http://localhost/");

require_once CORE . '/functions.php';

$test = new Test();

$test->test();

require_once CONTROLLERS . '/index.php';