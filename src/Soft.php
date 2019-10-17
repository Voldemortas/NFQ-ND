<?php
namespace Nfq\Akademija\Soft;

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