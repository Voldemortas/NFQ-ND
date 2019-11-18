<?php

use Nfq\Homework\Bedroom;
use Nfq\Homework\BookingManager;
use Nfq\Homework\SingleRoom;
use Nfq\Homework\Apartment;
use Nfq\Homework\Guest;
use Nfq\Homework\Reservation;

$loader = require_once __DIR__ . '/vendor/autoload.php';


$room = new SingleRoom(1408, 99);
$guest = new Guest('Vardenis', 'Pavardenis');
$startDate = new \DateTime('2019-04-20');
$endDate = new \DateTime('2019-04-25');
$reservation = new Reservation($startDate, $endDate, $guest);
BookingManager::bookRoom($room, $reservation);