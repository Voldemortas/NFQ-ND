<?php
namespace Nfq\Homework;
class SingleRoom extends Room
{
    public function __construct(int $roomNumber, float $price)
    {
        parent::__construct('Standard room', true, false, 1, $roomNumber, ['TV', 'air-conditioner'], $price);
    }

}