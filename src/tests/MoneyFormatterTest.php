<?php 
declare(strict_types = 1);

namespace NFQ\Homework\Tests;

use PHPUnit\Framework\TestCase;
use NFQ\Homework\NumberFormatter;
use NFQ\Homework\MoneyFormatter;

class MoneyFormatterTest extends TestCase
{
    private $mock;
    private $numberFormatter;
    public function setUp(): void
    {
        $this->mock = $this->getMock();
        $this->numberFormatter = new MoneyFormatter($this->mock);
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
     * @param string $expectedWithoutCurrency
     */
    public function testIfConvertedToEur(float $givenNumber, string $expectedWithoutCurrency)
    {
        $this->mock->method('formatNumber')
            ->with($givenNumber)
            ->willReturn($expectedWithoutCurrency);
        $actual = $this->numberFormatter->formatEur($givenNumber);
        $this->assertSame($expectedWithoutCurrency . ' €', $actual);
    }
    
    /**
     * @dataProvider numbersProvider
     * @param float $givenNumber
     * @param string $expectedWithoutCurrency
     */
    public function testIfConvertedToUsd(float $givenNumber, string $expectedWithoutCurrency)
    {
        $this->mock->method('formatNumber')
            ->with($givenNumber)
            ->willReturn($expectedWithoutCurrency);
        $actual = $this->numberFormatter->formatUsd($givenNumber);
        $this->assertSame('$'.$expectedWithoutCurrency, $actual);
    }

    public function getMock()
    {
        $mock = $this->getMockBuilder(NumberFormatter::class)
            ->getMock();
        return $mock;
    }
}