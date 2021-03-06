<?php

namespace App\Views\LandingPage\Partials;

use App\Libraries\View\BaseView;
use App\Views\ViewRoutesContract;

class Navbar extends BaseView
{
    public function render(): string
    {

        $this->startHtmlParsing(); ?>

            <div class="site-mobile-menu site-navbar-target">
                <div class="site-mobile-menu-header">
                    <div class="site-mobile-menu-close mt-3">
                        <span class="icon-close2 js-menu-toggle"></span>
                    </div>
                </div>
                <div class="site-mobile-menu-body"></div>
            </div> <!-- .site-mobile-menu -->


            <!-- NAVBAR -->
            <header class="site-navbar mt-3">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="site-logo col-6">
                            <img src="<?= base_url(ViewRoutesContract::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'images/azmi/logo_white.svg')  ?>" alt="logo" style="width: 170px; height: 60px;">
                        </div>

                        <nav class="mx-auto site-navigation">
                            <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">
                                <li><a href="<?= route_to(ViewRoutesContract::LANDINGPAGE_HOME) ?>">Home</a></li>
                                <li><a href="<?= route_to(ViewRoutesContract::LANDINGPAGE_ABOUT) ?>">About</a></li>
                                <li><a href="<?= route_to(ViewRoutesContract::LANDINGPAGE_SERVICES) ?>">Services</a></li>
                                <li class="has-children">
                                    <a>Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="<?= route_to(ViewRoutesContract::LANDINGPAGE_GALLERY) ?>">Gallery</a></li>
                                        <li><a href="<?= route_to(ViewRoutesContract::LANDINGPAGE_NEWS) ?>">News</a></li>
                                    </ul>
                                </li>
                                <li class="has-children">
                                    <a>Jobs</a>
                                    <ul class="dropdown">
                                        <li><a href="<?= route_to(ViewRoutesContract::LANDINGPAGE_CAREER) ?>">Career</a></li>
                                        <li><a href="<?= route_to(ViewRoutesContract::PORTAL_PROFILE) ?>">User Profile</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?= route_to(ViewRoutesContract::LANDINGPAGE_CONTACT) ?>">Contact</a></li>


                                <li class="d-lg-none"><a href="<?= route_to(ViewRoutesContract::LOGIN) ?>">Log In</a></li>
                            </ul>
                        </nav>

                        <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
                            <div class="ml-auto">
                                <a href="<?= route_to(ViewRoutesContract::LOGIN) ?>" class="btn btn-warning border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-lock_outline"></span>Log In</a>
                            </div>
                            <a href="#" class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3"><span class="icon-menu h3 m-0 p-0 mt-2"></span></a>
                        </div>

                    </div>
                </div>
            </header>

            <script>
                (function() {

                    function parentOrAncestorHasClass(element, className, limitParent) {
                        if (!element || element.length === 0) {
                            return false;
                        }
                        var parent = element;
                        do {
                            if (parent === limitParent) {
                                break;
                            }
                            if (parent.className.indexOf(className) >= 0) {
                                return parent;
                            }
                        } while (parent = parent.parentNode);
                        return false;
                    }

                    /**@type {NodeListOf<HTMLAnchorElement>} */
                    let navlinks = document.querySelectorAll('nav.site-navigation a');
                    let limitParent = document.querySelector('nav.site-navigation');
                    navlinks.forEach(navlink => {
                        if (navlink.href == (window.location.origin + window.location.pathname)) {
                            navlink.className = "nav-link active"

                            if (parentNav = parentOrAncestorHasClass(navlink, "has-children", limitParent)) {
                                parentNav.querySelector('a').className = "nav-link active";
                            }
                        }

                        
                    });
                }());
            </script>

            
        <?php return $this->endParsingAndGetHtml();
    }
}
