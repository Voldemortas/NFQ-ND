<?php
declare(strict_types=1);
namespace Nfq\Akademija\Strict;
error_reporting(E_ALL);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');

function calculateHomeWorkSum(int ...$numbers):int{
    $sum = 0;
    foreach($numbers as $number){
        try{
            $sum = $sum + $number;
        }catch(\Throwable $exp){            
            $consoleColor = new \JakubOnderka\PhpConsoleColor\ConsoleColor();
            echo $consoleColor->apply("color_1", 'Kažkas negerai. ');
            break;
        }
    }
    return $sum;    
}