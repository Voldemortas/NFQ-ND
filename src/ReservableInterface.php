<?php

namespace Nfq\Homework;

interface  ReservableInterface
{
    public function addReservation(Reservation $reservation);
    public function removeReservation(Reservation $reservation);
}