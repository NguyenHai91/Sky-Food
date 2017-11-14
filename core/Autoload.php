<?php

namespace Core;

class Autoload
{
    public function __construct()
    {
        spl_autoload_register([$this, '_autoload']);
    }

    private function _autoload($file)
    {
        $chunks = explode('\\', $file);
        // $chunks = array_map(function ($item) {
        //     return ucfirst($item);
        // }, $chunks);
        $file = implode('/', $chunks);
        $file = lcfirst($file) . '.php';
        if (file_exists($file)) {
            require $file;
        }
    }
}
