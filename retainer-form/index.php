<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Maintenance mode
if (file_exists($maintenance = __DIR__.'/../../retainer-core/storage/framework/maintenance.php')) {
    require $maintenance;
}

// Composer autoload
require __DIR__.'/../../retainer-core/vendor/autoload.php';

// Bootstrap Laravel
/** @var Application $app */
$app = require_once __DIR__.'/../../retainer-core/bootstrap/app.php';

$app->handleRequest(Request::capture());
