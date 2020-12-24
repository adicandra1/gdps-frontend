<?php

namespace App\Views\Portal\Profile\PDF;

use App\Entities\Typing\User;
use App\Libraries\View\BaseView;
use App\Libraries\View\TemplateEngine;
use App\Views\Portal\Profile\Edit\EditViewConstants;
use App\Views\Portal\Profile\Partials\NoDataView;
use App\Views\ViewRoutesContract;
use Exception;

/**
 * @todo create layout for downloaded pdf
 */
class PDFLayout extends BaseView
{
    const OPERATION_PDF_PRINT = 1;
    const OPERATION_PREVIEW_BROWSER = 2;

    protected User $user;

    private string $cssURL;

    public function __construct(User $user, int $operation = self::OPERATION_PDF_PRINT)
    {
        $this->user = $user;

        if ($operation == self::OPERATION_PDF_PRINT) {
            $this->cssURL = realpath(ROOTPATH . 'public/assets/vendor/bootstrap/dist/css/bootstrap.min.css');
        } else if ($operation == self::OPERATION_PREVIEW_BROWSER) {
            $this->cssURL = base_url('assets/frontend/portal/css/style.css');
        } else {
            throw new Exception("Operation Not Permitted");
        }
    }

    public function render(): string
    {
        $this->startHtmlParsing(); ?>

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Resume</title>
            <link rel="stylesheet" href="<?= $this->cssURL; ?>">
        </head>

        <body>
            <div class="card" id="profile-card">

                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Resume</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="<?= route_to(ViewRoutesContract::PROFILE_EDIT) ?>" style="padding-right: 20px;">
                                <i class="mdi mdi-pencil text-primary pd-5" data-toggle="tooltip" data-original-title="edit"></i>
                            </a>
                            <a href="#" data-toggle="modal" data-target="#downloadModal" style="padding-right: 20px;">
                                <i class="mdi mdi-download text-primary pd-5" data-toggle="tooltip" data-original-title="download"></i>
                            </a>
                            <a href="<?= route_to(ViewRoutesContract::PROFILE_PRINT_RESUME) ?>">
                                <i class="mdi mdi-printer" title="" data-toggle="tooltip" data-original-title="print"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card-body section">
                    <h6 class="heading-small text-muted mb-4"><?= date('d M Y') ?></h6>
                    <div class="row">
                        <div class="col-3">
                            <div class="card">
                                <img class="card-img-top" src="<?= $this->user->basicInfo->profilePicture ?? '/assets/img/profile/Eb5-ZokU0AIcE1r.jpeg' ?>">
                            </div>
                        </div>
                        <div class="col-9">
                            <div class="form-group">
                                <div class="candidate-name">
                                    <h2 class="text-primary"><?= $this->user->basicInfo->fullName ?? 'Full Name Placeholder' ?></h2>
                                </div>
                                <div class="highest-information">
                                    <h4>Teknik Informatika</h4>
                                </div>
                                <div class="highest-information">
                                    <h4>Sekolah Tinggi Teknologi Adisutjipto</h4>
                                </div>
                                <div class="highest-information">
                                    <h4><?= ($this->user != null) ? "{$this->user->basicInfo->contact} | {$this->user->email}" : "Contact Person Placeholder" ?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body section">

                    <div class="section-head">
                        <div class="row">
                            <div class="col-8">
                                <h6 class="heading-small text-muted mb-4">About Me</h6>
                            </div>
                            <div class="col-4 text-right">
                                <a href="<?= route_to(ViewRoutesContract::PROFILE_EDIT) . EditViewConstants::aboutMeSectionId ?>">
                                    <i class="mdi mdi-pencil text-primary pd-5" data-toggle="tooltip" data-original-title="edit"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="pl-lg-4">
                        <div class="row">

                            <div class="col-4">
                                <div class="form-group">
                                    <label for="name" name="name">Name</label>
                                </div>
                            </div>
                            <div class=" col-8">
                                <div class="form-group">
                                    <label class="name" for="name">: <?= $this->user->basicInfo->fullName ?? " - " ?></label>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="form-group">
                                    <label for="name" name="name">Email</label>
                                </div>
                            </div>
                            <div class=" col-8">
                                <div class="form-group">
                                    <label class="name" for="name">: <?= $this->user->email ?? " - " ?></label>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="form-group">
                                    <label for="name" name="name">Contact</label>
                                </div>
                            </div>
                            <div class=" col-8">
                                <div class="form-group">
                                    <label class="name" for="name">: <?= $this->user->basicInfo->contact ?? " - " ?></label>
                                </div>
                            </div>


                            <div class="col-4">
                                <div class="form-group">
                                    <label for="name" name="name">Date of Birth</label>
                                </div>
                            </div>
                            <div class=" col-8">
                                <div class="form-group">
                                    <label class="name" for="name">: <?= date_create($this->user->basicInfo->dateOfBirth)->format('d M Y') ?? " - " ?></label>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="form-group">
                                    <label for="name" name="name">Address</label>
                                </div>
                            </div>
                            <div class=" col-8">
                                <div class="form-group">
                                    <label class="name" for="name">: <?= $this->user->basicInfo->address ?? " - " ?></label>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="form-group">
                                    <label for="name" name="name">Nationality</label>
                                </div>
                            </div>
                            <div class=" col-8">
                                <div class="form-group">
                                    <label class="name" for="name">: <?= $this->user->basicInfo->nationality ?? " - " ?></label>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="card-body section">

                    <div class="section-head">
                        <div class="row">
                            <div class="col-8">
                                <h6 class="heading-small text-muted mb-4">Experience
                                    <i class="mdi mdi-briefcase text-primary"></i>
                                </h6>
                            </div>
                            <div class="col-4 text-right">
                                <a href="<?= route_to(ViewRoutesContract::PROFILE_EDIT) . EditViewConstants::experienceSectionId ?> ">
                                    <i class="mdi mdi-pencil text-primary pd-5" data-toggle="tooltip" data-original-title="edit"></i>
                                </a>
                            </div>
                        </div>

                    </div>

                    <div class="section-body">
                        <?php
                        if (!$this->user->experience) :

                            echo TemplateEngine::view(new NoDataView("No Experience Added yet!", route_to(ViewRoutesContract::PROFILE_EDIT) . EditViewConstants::experienceSectionId));

                        else : ?>
                            <ul>
                                <?php foreach ($this->user->experience as $experience) : ?>

                                    <li>
                                        <div class="row">
                                            <div class="pl-lg-4">
                                                <div>
                                                    <h3 class="resume-title" id="lbl_preview_output_position_0"><?= $experience->role ?></h3>
                                                </div>
                                                <div>
                                                    <span class="resume-title" id="lbl_preview_output_position_0"><?= $experience->company ?></span>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group small-form-group">
                                                        <p><?= $experience->joinDate ?> to <?= $experience->endDate ?></p>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group small-form-group">
                                                        <p><?= $experience->description ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </li>

                                <?php endforeach ?>
                            </ul>
                        <?php endif ?>
                    </div>

                </div>

                <div class="card-body section">
                    <div class="section-head">
                        <div class="row">
                            <div class="col-8">
                                <h6 class="heading-small text-muted mb-4">Education
                                    <i class="mdi mdi-school text-primary"></i>
                                </h6>
                            </div>
                            <div class="col-4 text-right">
                                <a href="<?= route_to(ViewRoutesContract::PROFILE_EDIT) . EditViewConstants::educationSectionId ?>">
                                    <i class="mdi mdi-pencil text-primary pd-5" data-toggle="tooltip" data-original-title="edit"></i>
                                </a>
                            </div>
                        </div>

                    </div>

                    <div class="section-body">
                        <?php
                        if (!$this->user->educations) :

                            echo TemplateEngine::view(new NoDataView("No Education Added yet!", route_to(ViewRoutesContract::PROFILE_EDIT) . EditViewConstants::educationSectionId));

                        else : ?>
                            <ul>
                                <?php foreach ($this->user->educations as $education) : ?>
                                    <li>
                                        <div class="row">
                                            <div class="pl-lg-4">
                                                <div>
                                                    <h3 class="resume-title" id="lbl_preview_output_position_0"><?= $education->university ?></h3>
                                                </div>
                                                <div>
                                                    <span class="resume-title" id="lbl_preview_output_position_0"><?= $education->major ?> | <?= $education->startDate->format('dd/mm/yyyy') . ' to ' . $education->graduationDate->format('dd/mm/yyyy') ?> </span>
                                                </div><br>
                                                <div class="col-12">
                                                    <div class="form-group small-form-group">
                                                        <p><?= $education->decription ?></p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </li>
                                <?php endforeach ?>
                            </ul>
                        <?php endif ?>
                    </div>


                </div>

                <div class="card-body section">
                    <div class="section-head">
                        <div class="row">
                            <div class="col-8">
                                <h6 class="heading-small text-muted mb-4">Skills
                                    <i class="mdi mdi-android-studio text-primary"></i>
                                </h6>
                            </div>
                            <div class="col-4 text-right">
                                <a href="<?= route_to(ViewRoutesContract::PROFILE_EDIT) . EditViewConstants::skillsSectionId ?> ">
                                    <i class="mdi mdi-pencil text-primary pd-5" data-toggle="tooltip" data-original-title="edit"></i>
                                </a>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="pl-lg-4">


                            <div class="col-12">
                                <div class="form-group small-form-group">
                                    <p>HTML Programming, CSS, Microsoft Word, Microsoft PowerPoint</p>
                                    <p>JavaScript, PHP And MySQL, Microsoft Excel</p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="card-body section">
                    <div class="section-head">
                        <div class="row">
                            <div class="col-8">
                                <h6 class="heading-small text-muted mb-4">User information</h6>
                            </div>
                            <div class="col-4 text-right">
                                <a href="<?= route_to(ViewRoutesContract::PROFILE_EDIT) . EditViewConstants::additionalFilesSectionId ?> ">
                                    <i class="mdi mdi-pencil text-primary pd-5" data-toggle="tooltip" data-original-title="edit"></i>
                                </a>
                            </div>
                        </div>

                    </div>

                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-username">KTP</label>
                                    <div class="data-container">
                                        <?= $this->user->additionalFiles->ktp ?? 'Data not yet provided!' ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email">CV</label>
                                    <a href=""><i class="fas fa-download text-primary pd-5" data-toggle="tooltip" data-original-title="download"></i></a>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email">Pas Foto</label>
                                    <a href=""><i class="fas fa-download text-primary pd-5" data-toggle="tooltip" data-original-title="download"></i></a>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email">Cover Letter</label>
                                    <a href=""><i class="fas fa-download text-primary pd-5" data-toggle="tooltip" data-original-title="download"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </body>

        </html>

<?php return $this->endParsingAndGetHtml();
    }
}
