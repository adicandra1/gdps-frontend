<?php namespace App\Views\Portal\Partials;

use App\Views\DataContract\User;
use App\Libraries\View\BaseView;
use App\Views\ViewRoutesContract;

class HorizontalNavbar extends BaseView {

    private User $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function render(): string
    {
        $this->startHtmlParsing() ?>

        <div class="horizontal-menu">
        <nav class="navbar top-navbar col-lg-12 col-12 p-0">
            <div class="container-fluid">
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">
                <ul class="navbar-nav navbar-nav-left">
                <li class="nav-item ml-0 mr-5 d-lg-flex d-none">
                    <a href="#" class="nav-link horizontal-nav-left-menu"><i class="mdi mdi-format-list-bulleted">
                    </i>
                    </a>
                </li>

                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="horizontal-menu-toggle">
                    <span class="mdi mdi-menu"></span>
                </button>

                </ul>
                <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo" href="<?= route_to(ViewRoutesContract::PORTAL_DASHBOARD) ?>"><img src="<?= base_url(ViewRoutesContract::PORTAL_ASSETS_RELATIVE_PATH. 'images/logo_gdps.svg') ?>" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="<?= route_to(ViewRoutesContract::PORTAL_DASHBOARD) ?>"><img src="<?= base_url(ViewRoutesContract::PORTAL_ASSETS_RELATIVE_PATH . 'images/logo_gdps.svg') ?>" alt="logo" /></a>
                </div>
                <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item dropdown">
                    <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-toggle="dropdown">
                    <i class="mdi mdi-bell mx-0"></i>
                    <span class="count bg-success">1</span>
                    </a>
                    <div id="notificationWrapper" class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                    <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                        <div class="preview-icon bg-success">
                            <i class="mdi mdi-information mx-0"></i>
                        </div>
                        </div>
                        <div class="preview-item-content">
                        <h6 class="preview-subject font-weight-normal">Application Error</h6>
                        <p class="font-weight-light small-text mb-0 text-muted">
                            Just now
                        </p>
                        </div>
                    </a>
                    
                    </div>
                </li>

                <li class="nav-item nav-profile dropdown">
                    <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" id="profileDropdown">

                    <span class="online-status"></span>
                    <img src="<?= $this->user->basicInfo->profilePicture ?? base_url('uploads/img/profile/defaul.jpg') ?>" alt="profile" />
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">

                    <a class="dropdown-item head">
                        <span class="nav-profile-name"><?= $this->user->username ?? "DEFAULT USERNAME"; ?></span>
                    </a>
                    <a class="dropdown-item" href="<?= route_to(ViewRoutesContract::PORTAL_SETTINGS) ?>">
                        <i class="mdi mdi-settings text-primary"></i>
                        Settings
                    </a>
                    <a class="dropdown-item" href="<?= route_to(ViewRoutesContract::LOGOUT) ?>">
                        <i class="mdi mdi-logout text-primary"></i>
                        Logout
                    </a>
                    </div>
                </li>
                </ul>

            </div>
            </div>
        </nav>
        <nav class="bottom-navbar">
            <div class="container">
            <ul class="nav page-navigation">
                <li class="nav-item">
                <a class="nav-link" href="<?= route_to(ViewRoutesContract::PORTAL_DASHBOARD) ?>"">
                    <i class="mdi mdi-file-document-box menu-icon"></i>
                    <span class="menu-title">Dashboard</span>
                </a>
                </li>
                <li class="nav-item">
                <a href="<?= route_to(ViewRoutesContract::PORTAL_VACANCY) ?>" class="nav-link">
                    <i class="mdi mdi-chart-areaspline menu-icon"></i>
                    <span class="menu-title">Vacancy</span>
                    <i class="menu-arrow"></i>
                </a>
                </li>
                <li class="nav-item">
                <a href="<?= route_to(ViewRoutesContract::PORTAL_PROFILE) ?>" class="nav-link">
                    <i class="mdi mdi-cube-outline menu-icon"></i>
                    <span class="menu-title">Profile</span>
                    <i class="menu-arrow"></i>
                </a>
                </li>
                
                
            </ul>
            </div>
        </nav>
        </div>
        <!-- partial -->

        <?php 
        
        return $this->endParsingAndGetHtml();
    }
}