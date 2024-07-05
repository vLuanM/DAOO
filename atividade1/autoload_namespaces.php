<?php
    
    spl_autoload_register(function ($class_name) {
        $path = __DIR__ . '/' . str_replace('\\', '/', $class_name) . '.php';
        require_once $path;
    });
?>
