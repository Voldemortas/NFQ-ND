<?php 
declare(strict_types = 1);

namespace NFQ\Homework\Tests;

use PHPUnit\Framework\TestCase;
use NFQ\Homework\NumberFormatter;


class NumberFormatterTest extends TestCase
{
    private $numberFormatter = null;
    public function setUp(): void
    {
        $this->numberFormatter = new NumberFormatter();
    }
    public function numbersProvider()
    {
        return [
            [-123654.89, '-124K'],
            [2835779, '2.84M'],
            [-2835779, '-2.84M'],
            [999500, '1.00M'],
            [-999500, '-1.00M'],
            [535216, '535K'],
            [-535216, '-535K'],
            [99950, '100K'],
            [-99950, '-100K'],
            [27533.78, '27 534'],
            [-27533.78, '-27 534'],
            [999.9999, '1 000'],
            [-999.9999, '-1 000'],
            [999.99, '999.99'],
            [-999.99, '-999.99'],
            [533.1, '533.10'],
            [-533.1, '-533.10'],
            [66.6666, '66.67'],
            [-66.6666, '-66.67'],
            [12.00, '12'],
            [0.00, '0'],
        ];
    }
    /**
     * @dataProvider numbersProvider
     * @param float $givenNumber
     * @param string $expectedNumber
     */
    public function testIfFormattedProperly($givenNumber, $expectedNumber)
    {
        $this->assertSame($expectedNumber, $this->numberFormatter->formatNumber($givenNumber));
    }
}