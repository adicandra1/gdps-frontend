<?php namespace App\Views\DataContract;;

use DateTime;

class Education {

    public string $university;

    public string $major;

    public DateTime $startDate;

    public DateTime $graduationDate;

    public string $decription;

    public function __construct(string $university, string $major, DateTime $startDate, DateTime $graduationDate, string $decription)
    {
        $this->university = $university;
        $this->major = $major;
        $this->startDate = $startDate;
        $this->graduationDate = $graduationDate;
        $this->decription = $decription;
    }

    public static function withMockData() : self {
        return new self(
            "STTA",
            "Informatika",
            new DateTime(),
            new DateTime(),
            "This is description Sample"
        );
    }
}