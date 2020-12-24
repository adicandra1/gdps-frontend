<?php

namespace App\Views\Portal\Partials;

use App\Libraries\View\BaseView;
use App\Views\DataContract\Vacancy;
use App\Views\ViewRoutesContract;
use DateTime;

class VacancyList extends BaseView
{
    /**
     * @var Vacancy[]
     */
    private array $vacancy;

    private int $limit;

    /**
     * @param Vacancy[] $vacancy
     */
    public function __construct(array $vacancy, int $limit = 0)
    {
        $this->vacancy = $vacancy;
        if ($limit == 0) {
            $limit = count($vacancy);
        }
        $this->limit = $limit;
    }

    public function render(): string
    {
        $this->startHtmlParsing(); ?>

        <ul class="job-listings mb-3">
            
            <?php if (empty($this->vacancy)) : ?>
                <li class="job-listing d-flex pb-3 pb-sm-0 align-items-center justify-content-center" style="min-height: 150px;">
                    <a class="primary"></a>
                    <h2>No Vacancy available</h2>
                </li>

            <?php else : ?>

                <?php for ($i = 0; $i < $this->limit;  $i++) : ?>
                    <?php $vacancyItem = $this->vacancy[$i]; ?>
                    <li class="job-listing job-listing-fix d-flex align-items-center">

                        <a class="primary" href="<?= route_to(ViewRoutesContract::PORTAL_VACANCY_DETAIL, $vacancyItem->id) ?>"></a>


                        <div class="job-listing-logo job-listing-logo-fix">
                            <div class="image-container d-flex align-items-center justify-content-center" style="height: 150px; width: 150px;">
                                <img src="<?= $vacancyItem->imageLogoPath ?>" alt="Image" class="img-fluid">
                            </div>
                        </div>

                        <div class="job-listing-about job-listing-about-fix d-sm-flex justify-content-between align-items-center mx-4">
                            <div class="job-listing-position flex-w-50 mb-3 mb-sm-0">
                                <h2 class="mb-1"><?= $vacancyItem->profession ?></h2>
                                <h5 class="mb-1"><b><?= $vacancyItem->createdDate->diff(new DateTime())->format('%a days ago') ?></b>  • <?= $vacancyItem->remote ?> </h5>
                                <p class="mb-1">
                                    <?php foreach ($vacancyItem->tags as $tag) : ?>
                                        <a href="<?= $tag->slug ?>" class="badge badge-info"><?= $tag->name ?></a>
                                    <?php endforeach ?>
                                </p>
                            </div>
                            <div class="job-listing-location mb-3 mb-sm-0 flex-w-25">
                                <span class="icon-room"></span> <?= $vacancyItem->location ?>
                            </div>
                            <div class="job-listing-meta mb-3 mb-sm-0">
                                <span class="badge badge-danger"><?= $vacancyItem->type ?></span>
                            </div>
                        </div>

                    </li>
                <?php endfor ?>

            <?php endif ?>


        </ul>

        <?php return $this->endParsingAndGetHtml();
    }
}
