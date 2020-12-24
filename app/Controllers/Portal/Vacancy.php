<?php 

namespace App\Controllers\Portal;

use App\Helpers\Auth;
use App\Libraries\View\TemplateEngine;
use CodeIgniter\Controller;
use App\Models;
use App\Repository\Api\ApiVacancyRepository;
use App\Views\DataContract\Page;
use App\Views\DataContract\User;
use App\Views\DataContract\Vacancy as DataContractVacancy;
use App\Views\Portal\Vacancy as PortalVacancy;
use App\Views\Portal\VacancyDetail;

class Vacancy extends Controller {

    private ApiVacancyRepository $apiVacancyRepository;

    public function __construct()
    {
        //$this->model = new Models\Portal\Vacancy();
        $this->apiVacancyRepository = new ApiVacancyRepository();
        helper('view');
    }

    public function index() : string 
    {
        $currentPage = (isset($_GET['page']) && filter_input(INPUT_GET, 'page', FILTER_VALIDATE_INT) && $_GET['page'] > 0) ? (int) $_GET['page'] : 1;
        $dataPerPage = (isset($_GET['dataPerPage']) && filter_input(INPUT_GET, 'dataPerPage', FILTER_VALIDATE_INT) && $_GET['dataPerPage'] > 0) ? (int) $_GET['dataPerPage'] : 10;

        $vacancyListResponse = $this->apiVacancyRepository->getList($currentPage, $dataPerPage);

        return TemplateEngine::view(
            new PortalVacancy(
                "Vacancy List",
                User::withMockData(),
                $vacancyListResponse->vacancies,
                new Page($vacancyListResponse->totalData, $vacancyListResponse->currentPage, $vacancyListResponse->dataPerPage)
            )
        );
    }

    public function detail(string $vacancyId) : string {
        $vacancyDetailResponse = $this->apiVacancyRepository->getDetail($vacancyId);

        return TemplateEngine::view(
            new VacancyDetail(
                $vacancyDetailResponse,
                User::withMockData()
            )
        );
        //return view('client/portal/vacancy-detail', ['title' => 'Job Name Placeholder']);
    }

    public function apply() : void
    {
        # code...
    }

    public function toggleSave() : void
    {
        #save data to database
    }

    /*
    public function test() : void {
        $entityManager = Services::doctrine()->em;

        $testEntity = new TestEntity(1, "./cav.jpg", "Programmer YO!");

        $entityManager->persist($testEntity);

        $entityManager->flush();
    }
    */

}