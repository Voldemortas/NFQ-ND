<?php

namespace Nfq\Homework;
class Guest
{
    private $firstName;
    private $lastName;

    /**
     * Guest constructor.
     * @param string $firstName
     * @param string $lastName
     */
    public function __construct(string  $firstName, string  $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    public function __toString(): string
    {
        return '<strong>'.$this->firstName.' '.$this->lastName.'</strong>';
    }

}