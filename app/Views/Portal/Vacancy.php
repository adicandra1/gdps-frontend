<?php namespace App\Views\Portal;

use App\Views\DataContract\User;
use App\Views\DataContract\Vacancy as VacancyData;
use App\Libraries\View\TemplateEngine;
use App\Views\DataContract\Page;
use App\Views\Portal\Partials\VacancyList;

class Vacancy extends AppShell {

    /**
     * @var VacancyData[]
     */
    private array $vacancy;

    /**
     * Paging:
     * currentPage, totalpage(), totalData, dataPerPage
     */
    private Page $page;

    /**
     * @param VacancyData[] $vacancy
     */
    public function __construct(string $htmlTitle, User $user, array $vacancy, Page $page)
    {
        $this->vacancy = $vacancy;
        parent::__construct($htmlTitle, $user);

        $this->page = $page;
    }

    protected function sectionContent(): string
    {
        $this->startHtmlParsing(); ?>

            <div class="container">
                <?= TemplateEngine::view(new VacancyList($this->vacancy)) ?>

                <div class="row pagination-wrap">
                    <div class="col-md-6 text-center text-md-left mb-4 mb-md-0">
                        <span>Showing <?= "{$this->page->currentPageDataCount()} Of {$this->page->totalData} Jobs" ?></span>
                    </div>
                    <div class="col-md-6 text-center text-md-right">
                        <div class="custom-pagination ml-auto">
                            <a href="#" class="prev">Prev</a>
                            <div class="d-inline-block">
                                <a href="#" class="active">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <a href="#">4</a>
                            </div>
                            <a href="#" class="next">Next</a>
                        </div>
                    </div>
                </div>
            </div>

        <?php
        return $this->endParsingAndGetHtml();
    }
}