<?php namespace App\Controllers\Portal;

use App\Controllers\BaseController;
use App\Libraries\View\TemplateEngine;
use App\Views\DataContract\User;
use App\Views\DataContract\Vacancy;
use App\Views\Portal\Dashboard as DashboardView;

class Dashboard extends BaseController
{
    public function index() : string {
        return TemplateEngine::view(
            new DashboardView(
                "Dashboard",
                User::withMockData(),
                array(
                    Vacancy::withMockData(),
                    Vacancy::withMockData(),
                    Vacancy::withMockData()
                )
            )
        );
    }
}