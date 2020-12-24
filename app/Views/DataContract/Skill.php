<?php namespace App\Views\DataContract;

class Skill {
    public string $id;

    public string $name;

    public function __construct(string $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public static function withMockData() : self {
        return new self(
            '1',
            'php'
        );
    }
}