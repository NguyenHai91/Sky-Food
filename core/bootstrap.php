<?php

use Core\App;
use Core\Database\Connection;
use Core\Database\QueryBuilder;

require 'Helper.php';

App::bind('config', require 'config.php');

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));
