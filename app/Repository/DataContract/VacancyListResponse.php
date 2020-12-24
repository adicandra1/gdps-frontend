<?php namespace App\Repository\DataContract;

use App\Views\DataContract\Vacancy;

class VacancyListResponse
{
    public int $currentPage;

    public int $dataPerPage;
    
    public int $totalData;

    /**
     * @var Vacancy[]
     */
    public $vacancies;

    /**
     * @param Vacancy[] $vacancies
     */
    public function __construct(int $currentPage, int $dataPerPage, int $totalData, array $vacancies)
    {
        $this->currentPage = $currentPage;
        $this->dataPerPage = $dataPerPage;
        $this->totalData = $totalData;
        $this->vacancies = $vacancies;
    }
}