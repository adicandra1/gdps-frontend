<?php namespace Config;

/**
 * jadi ceritanya class ini yang kita gunain untuk nampung variable 
 * Routing di view
 */
class RoutesConstant {

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
}