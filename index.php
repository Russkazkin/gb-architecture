<?php

use TASK8_1\Explorer;

spl_autoload_register(function ($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    require_once __DIR__ . DIRECTORY_SEPARATOR . $className . '.php';
});

echo 'Задание 1' . PHP_EOL;
$explorer = new Explorer();
$explorer->printDirContent('misc');
echo "_______________________" . PHP_EOL;
$explorer->printDirContent('FLA');
echo "_______________________" . PHP_EOL;
$explorer->printDirContent('..');
echo "_______________________" . PHP_EOL;
$explorer->printDirContent('FLB');

echo 'Задание 4' . PHP_EOL;
ini_set('memory_limit', '-1');

$service = new \TASK8_4\Prime();
echo $service->setNum(13195)->setNumArray()->setPrimes()->getMaxPrime() . PHP_EOL;