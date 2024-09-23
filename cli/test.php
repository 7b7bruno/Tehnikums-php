<?php

class Person {
    private $firstName;
    private $lastName;
    private $personalCode;
    private $distance;

    public function __construct($distance, $firstName, $lastName, $personalCode) {
        $this->firstname = $firstName;
        $this->lastName = $lastName;
        $this->personalCode = $personalCode;
        $this->distance = $distance;
    }

    public function walk($distance) {
        $this->$distance += $distance;
    }
    public function resetDistance() {
        $this->$distance = 0;
    }
}