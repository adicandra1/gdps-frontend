<?php namespace App\Views\DataContract;

use DateTime;

class User {

    public string $userId;

    public string $username;
    
    public string $email;

    public DateTime $createdDate;

    public BasicInfo $basicInfo;

    /** @var Experience[] */
    public $experience = [];

    /** @var Education[] */
    public $educations = [];

    /** @var Skill[] */
    public $skills = [];

    public AdditionalFiles $additionalFiles;

    public function __construct(string $userId, string $username, string $email, DateTime $createdDate, BasicInfo $basicInfo, array $experience, array $educations, array $skills, AdditionalFiles $additionalFiles)
    {
        $this->userId = $userId;
        $this->username = $username;
        $this->email = $email;
        $this->createdDate = $createdDate;
        $this->basicInfo = $basicInfo;
        $this->experience = $experience;
        $this->educations = $educations;
        $this->skills = $skills;
        $this->additionalFiles = $additionalFiles;
    }

    public static function withMockData() : self {
        return new self(
            "1",
            "azmi1",
            "azmi@gmail.com",
            new DateTime(),
            BasicInfo::withMockData(),
            array(
                Experience::withMockData(),
                Experience::withMockData()
            ),
            array(
                Education::withMockData(),
                Education::withMockData()
            ),
            array(
                Skill::withMockData(),
                Skill::withMockData()
            ),
            AdditionalFiles::withMockData()
        );
    }
}