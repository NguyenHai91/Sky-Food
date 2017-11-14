<?php

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

require 'core/Autoload.php';
new core\Autoload;
// require "vendor/autoload.php";
require 'core/bootstrap.php';

use core\Request;
use core\Router;

Router::load('app/routes.php')
    ->direct(Request::uri(), Request::method());
