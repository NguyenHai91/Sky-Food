<?php

session_start();

function dd($variable)
{
    return die(var_dump($variable));
}

function view($name, $data = [])
{
    extract($data);
    return require "app/views/{$name}.view.php";
}

function redirect($path)
{
    header("Location: /{$path}");
}

function view_include($viewName, $data = [])
{
    if (!empty($viewName)) {
        $viewName = trim($viewName, '/');
        $viewName = trim($viewName, '.');
        $chunks = explode('.', $viewName);
        $path = implode('/', $chunks);
        extract($data);
        return require APP_DIR . '/views/' . $path . '.view.php';
    }
    return '';
}

define('ROOT_DIR', dirname(__DIR__, 1), true);
define('APP_DIR', ROOT_DIR . '/app');
