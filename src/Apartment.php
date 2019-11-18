<?php

namespace Nfq\Homework;
class Apartment extends Room
{
    public function __construct(int $roomNumber, float $price)
    {
        parent::__construct('Diamond room', true, true, 4, $roomNumber,
            ['TV', 'air-conditioner', 'refrigerator', 'mini-bar', 'bathtub', 'kitchen box', 'free Wi-fo'], $price);
    }

}