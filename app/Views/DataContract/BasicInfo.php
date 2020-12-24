<?php namespace App\Views\DataContract;

use DateTime;

class BasicInfo {

    public ?string $fullName = null;

    public ?string $profilePicture = null;

    public ?string $contact = null;

    public ?string $nationality = null;

    public ?DateTime $dateOfBirth = null;

    public ?string $address = null;

    public function __construct(?string $fullName, ?string $profilePicture, ?string $contact, ?string $nationality, ?DateTime $dateOfBirth, ?string $address)
    {
        $this->fullName = $fullName;
        $this->profilePicture = $profilePicture;
        $this->contact = $contact;
        $this->nationality = $nationality;
        $this->dateOfBirth = $dateOfBirth;
        $this->address = $address;
    }

    public static function withMockData() {
        return new self(
            "Azmi Rohim",
            "azmi.jpg",
            "08923124114",
            "Indonesia",
            new DateTime(),
            "Palembang"
        );
    }
}