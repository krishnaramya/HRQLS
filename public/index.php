<?php
define('API_URL', 'http://hercules.code4hr.org');

require_once __DIR__ . '/../vendor/autoload.php';

$bootstrap = new HRQLS\Bootstrap(new Silex\Application());

$bootstrap->loadConfig();

$bootstrap->startRenderEngine();

$bootstrap->connectDatabases();

$bootstrap->registerRoutes();

$bootstrap->startupSite();
