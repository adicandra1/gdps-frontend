<?php namespace App\Views\DataContract;

use DateTime;

class Experience {

    public string $role;

    public string $company;

    public DateTime $joinDate;

    public DateTime $endDate;

    public string $description;

    public function __construct(
        string $role,
        string $company,
        DateTime $joinDate,
        DateTime $endDate,
        string $description
    ) {
        $this->role = $role;
        $this->company = $company;
        $this->joinDate = $joinDate;
        $this->endDate = $endDate;
        $this->description = $description;
    }

    public static function withMockData() : self {
        return new self(
            "WebDev",
            "A-Company",
            new DateTime(),
            new DateTime(),
            "This is description sample"
        );
    }
}