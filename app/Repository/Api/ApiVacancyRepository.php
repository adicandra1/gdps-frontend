<?php namespace App\Repository\Api;

use App\Repository\DataContract\VacancyListResponse;
use App\Views\DataContract\Vacancy;
use Config\Services;
use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;

class ApiVacancyRepository
{
    private $client;

    public function __construct()
    {   
        $this->client = new Client([
            'base_uri' => 'backend.gdps.localhost/api/vacancy/'
        ]);
    }

    /**
     * @return VacancyListResponse|string|int
     */
    public function getList(int $currentPage = 1, int $dataPerPage = 10) {
        $apiResponse = $this->client->request("GET", '', [
            RequestOptions::QUERY => [
                'currentPage' => $currentPage,
                'dataPerPage' => $dataPerPage
            ]
        ])->getBody()->getContents();
        $jsonArray = json_decode($apiResponse, true);
        $autoMapper = Services::autoMapper();
        return $autoMapper->map($jsonArray, VacancyListResponse::class);
        //chop vacancy list (limit amount) and return it
        
    }

    public function getDetail(string $vacancyId) : Vacancy {
        $apiResponse = $this->client->request("GET", $vacancyId)->getBody()->getContents();
        $jsonArray = json_decode($apiResponse, true);
        $autoMapper = Services::autoMapper();
        return $autoMapper->map($jsonArray, Vacancy::class);
    }
}