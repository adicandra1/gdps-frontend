<?php

namespace App\Views;


class ViewRoutesContract
{
    /**
     * Alias untuk routing LandingPage
     * constant-constant dibawah ini yang nanti akan dipanggil di view untuk mengetahui url routing.
     */
    const LANDINGPAGE_HOME = 'landingpagehome';
    const LANDINGPAGE_ABOUT = 'landingpageabout';
    const LANDINGPAGE_SERVICES = 'landingpageservices';
    const LANDINGPAGE_NEWS = 'landingpagenews';
    const LANDINGPAGE_GALLERY = 'landingpagegallery';
    const LANDINGPAGE_CAREER = 'landingpagecareer';
    const LANDINGPAGE_CONTACT = 'landingpagecontact';


    /**
     * ini untuk folder assets/landing di frontend/public
     */
    const LANDINGPAGE_ASSETS_RELATIVE_PATH = 'assets/landing/';

    /**
     * ini untuk folder assets/portal di frontend/public
     */
    const PORTAL_ASSETS_RELATIVE_PATH = 'assets/portal/';

    /**
     * Alias untuk routing Portal
     * constant-constant dibawah ini yang nanti akan dipanggil di view untuk mengetahui url routing.
     */
    const PORTAL_DASHBOARD = 'portalDashboard';
    const PORTAL_VACANCY = 'portalVacancy';
    const PORTAL_VACANCY_DETAIL = 'portalVacancyDetail';
    const PORTAL_PROFILE = 'portalProfile';
    const PORTAL_PROFILE_EDIT = 'portalProfileEdit';
    const PORTAL_PROFILE_PRINT_RESUME = 'portalProfilePrintResume';
    const PORTAL_PROFILE_DOWNLOAD_RESUME = 'portalProfileDownloadResume';
    const PROFILE_SKILL_REPO = 'profileSkillRepo';
    const PORTAL_SETTINGS = 'portalSettings';


    const LOGIN = 'login';
    const LOGOUT = 'logout';
    const REGISTER = 'register';
    const FORGOT_PASS = 'forgotPassword';
    const RESET_PASS = 'resetPassword';
    const ACTIVATE_ACCOUNT = 'activateAccount';
    const RESEND_ACCOUNT_ACTIVATION = 'resendAccountActivation';

    const TEST = 'test';

    /**
     * for converting image name into valid url path
     */
    public static function imageProfile(string $imageName) {
        $path = base_url() . '/uploads/img/profile/';
        $defaultImage = "defaul.jpg";
        return $path . ($imageName ?? $defaultImage);
    }

}
