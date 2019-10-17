<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

$loader = require_once __DIR__ . '/vendor/autoload.php';
//require_once __DIR__.'/src/NotTyped.php';
$consoleColor = new JakubOnderka\PhpConsoleColor\ConsoleColor();


echo 'calculateHomeWorkSum: '.\calculateHomeWorkSum(3, 2.2, '1')."\n";
echo '\Nfq\Akademija\NotTyped\calculateHomeWorkSum: '.\Nfq\Akademija\NotTyped\calculateHomeWorkSum(3, 2.2, '1')."\n";
echo '\Nfq\Akademija\Soft\calculateHomeWorkSum: '.\Nfq\Akademija\Soft\calculateHomeWorkSum(3, 2.2, '1')."\n";
echo '\Nfq\Akademija\Strict\calculateHomeWorkSum: '.\Nfq\Akademija\Strict\calculateHomeWorkSum(3, 2.2, '1')."\n";