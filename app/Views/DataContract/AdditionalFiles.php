<?php namespace App\Views\DataContract;

class AdditionalFiles {

    public string $ktp;

    public string $cv;

    public string $pasFoto;

    public string $coverLetter;

    public function __construct(string $ktp, string $cv, string $pasFoto, string $coverLetter)
    {
        $this->ktp = $ktp;
        $this->cv = $cv;
        $this->pasFoto = $pasFoto;
        $this->coverLetter = $coverLetter;
    }

    public static function withMockData() : self {
        return new self(
            "ktp.jpg",
            "cv.pdf",
            "pasFoto.jpg",
            "coverLetter.pdf"
        );
    }
    
}