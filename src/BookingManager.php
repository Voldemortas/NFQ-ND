<?php

namespace Nfq\Homework;
class BookingManager
{
   static function bookRoom(Room $room, Reservation $reservation){
       $success = true;
       $room->addReservation($reservation);
       /*try{
           $room->addReservation($reservation);
       }catch (ReservationException $e){
            $success = false;
       }*/
       echo $room.' '.($success?'successfully':'unsuccessfully').' booked for '.$reservation."!\n";
   }
}