<?php

namespace Nfq\Homework;
class Bedroom extends Room
{
    public function __construct(int $roomNumber, float $price)
    {
        parent::__construct('Gold room', true, true, 2, $roomNumber,
            ['TV', 'air-conditioner', 'refrigerator', 'mini-bar', 'bathtub'], $price);
    }

}