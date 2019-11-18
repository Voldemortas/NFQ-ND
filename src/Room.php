<?php
namespace Nfq\Homework;
use Nfq\Homework\ReservableInterface;
abstract class Room implements ReservableInterface
{
    private $reservations;
    private $roomType;
    private $hasRestroom;
    private $hasBalcony;
    private $bedCount;
    private $roomNumber;
    private $extras;
    private $price;
    public function __construct(string $roomType, bool $hasRestroom, bool $hasBalcony, int $bedCount, int $roomNumber, array $extras, float $price)
    {
        $this->roomType = $roomType;
        $this->hasRestroom = $hasRestroom;
        $this->hasBalcony = $hasBalcony;
        $this->bedCount = $bedCount;
        $this->roomNumber = $roomNumber;
        $this->extras = $extras;
        $this->price = $price;
        $this->reservations = [];
    }

    /**
     * @return string
     */
    public function getRoomType(): string
    {
        return $this->roomType;
    }

    /**
     * @param string $roomType
     */
    private function setRoomType(string $roomType)
    {
        $this->roomType = $roomType;
    }

    /**
     * @return bool
     */
    public function isHasRestroom(): bool
    {
        return $this->hasRestroom;
    }

    /**
     * @param bool $hasRestroom
     */
    private function setHasRestroom(bool $hasRestroom)
    {
        $this->hasRestroom = $hasRestroom;
    }

    /**
     * @return bool
     */
    public function isHasBalcony(): bool
    {
        return $this->hasBalcony;
    }

    /**
     * @param bool $hasBalcony
     */
    private function setHasBalcony(bool $hasBalcony)
    {
        $this->hasBalcony = $hasBalcony;
    }

    /**
     * @return int
     */
    public function getBedCount(): int
    {
        return $this->bedCount;
    }

    /**
     * @param int $bedCount
     */
    private function setBedCount(int $bedCount)
    {
        $this->bedCount = $bedCount;
    }

    /**
     * @return int
     */
    public function getRoomNumber(): int
    {
        return $this->roomNumber;
    }

    /**
     * @param int $roomNumber
     */
    private function setRoomNumber(int $roomNumber)
    {
        $this->roomNumber = $roomNumber;
    }

    /**
     * @return array
     */
    public function getExtras(): array
    {
        return $this->extras;
    }

    /**
     * @param array $extras
     */
    private function setExtras(array $extras)
    {
        $this->extras = $extras;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    private function setPrice(float $price)
    {
        $this->price = $price;
    }

    public function addReservation(Reservation $reservation){
        //throw new ReservationException('Failed to add');
        $this->reservations[] = $reservation;
    }
    public function removeReservation(Reservation $reservation){
        $predicate = function (Reservation $element) use ($reservation){
          return $element->getStartDate() == $reservation->getEndDate() && $element->getEndDate() == $reservation->getEndDate();
        };
        $this->reservations = array_filter($this->reservations, !$predicate);
    }

    /**
     * @return array
     */
    public function getReservations(): array
    {
        return $this->reservations;
    }

    public function __toString(): string
    {
        return 'Room <strong>'.$this->roomNumber.'</strong>';
    }
}