<?php
declare(strict_types=1);

spl_autoload_register(function ($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    $className = preg_replace('/^App/', '', $className);
    require_once __DIR__ . DIRECTORY_SEPARATOR . $className . '.php';
});
