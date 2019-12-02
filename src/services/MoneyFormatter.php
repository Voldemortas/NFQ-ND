<?php 
declare(strict_types = 1);
namespace NFQ\Homework;

use NFQ\Homework\NumberFormatter;

class MoneyFormatter
{
    private $numberFormatter = null;
    public function __construct(NumberFormatter $numberFormatter)
    {
        $this->numberFormatter = $numberFormatter;
    }
    public function formatEur(float $number): string{
        return $this->numberFormatter->formatNumber($number).' €';
    }
    public function formatUsd(float $number, $formater = NumberFormatter::class): string{        
        return '$'.$this->numberFormatter->formatNumber($number);
    }
}