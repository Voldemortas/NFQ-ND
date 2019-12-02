<?php 
declare(strict_types = 1);
namespace NFQ\Homework;

class NumberFormatter
{
    //yo, I wanted to use static method as logically there's no need for it to have constructor, but since phpunit sucks, I'm forced to make it as nonstatic
    public function formatNumber(float $number): string
    {
        $absolute = abs($number);
        $sign = $number<0?'-':'';
        if (999500 <= $absolute)
        {
            return $sign.number_format($absolute / 1000000, 2, '.', '') . 'M';
        }
        if (99950 <= $absolute && 999500 > $absolute )
        {
            return $sign.number_format($absolute / 1000, 0, '', '') . 'K';
        }
        if (999.995 <= $absolute && 99950 > $absolute)
        {
            return $sign.number_format($absolute, 0, '', ' ');
        }
        return $sign.str_replace('.00', '', number_format($absolute, 2, '.', ''));
    }

}