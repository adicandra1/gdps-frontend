<?php namespace App\Views\LandingPage\Partials;

use App\Libraries\View\BaseView;
use App\Libraries\View\TemplateEngine;
use Config\RoutesConstant;

/**
 * Seperti yang sudah dijelaskan, abstract class adalah class setengah jadi,
 * yang harus di extends lagi nanti oleh class View
 * biasanya abstract class berisi 1 atau lebih function kosong,
 * yang nanti harus di implemetasikan di class yang meng-extends class ini.
 */
abstract class BaseLandingPage extends BaseView
{
    /**
     * salah satu class kosong, yang nanti diharuskan di implementasikan di
     * class yang meng-extends class ini
     * syntax nya seperti di bawah ini: abstract class {namaclass}()
     * 
     * abstract function content() ini nanti harus diisi content dari page LandingPage
     * misal: content dari page home, atau page about, tanpa header/navbar maupun footer,
     * karena navbar dan footernya sudah di render di class ini, lihat function render() dibawah
     */
    abstract function content() : string;


    public function render() : string {
        
        $this->startHtmlParsing(); ?>
            
            <!-- Paste HTML disini -->
            <!-- Paste HTML disini -->
            <!doctype html>
            <html lang="en">

            <head>
                <title>GPDS</title>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <meta name="description" content="" />
                <meta name="keywords" content="" />
                <meta name="author" content="Free-Template.co" />
                <link rel="shortcut icon" href="ftco-32x32.png">

                <link rel="stylesheet" href="<?= base_url(RoutesConstant::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'css/custom-bs.css') ?>">
                <link rel="stylesheet" href="<?= base_url(RoutesConstant::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'css/jquery.fancybox.min.css') ?>">
                <link rel="stylesheet" href="<?= base_url(RoutesConstant::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'css/bootstrap-select.min.css') ?>">
                <link rel="stylesheet" href="<?= base_url(RoutesConstant::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'fonts/icomoon/style.css') ?>">
                <link rel="stylesheet" href="<?= base_url(RoutesConstant::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'fonts/line-icons/style.css') ?>">
                <link rel="stylesheet" href="<?= base_url(RoutesConstant::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'css/owl.carousel.min.css') ?>">
                <link rel="stylesheet" href="<?= base_url(RoutesConstant::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'css/animate.min.css') ?>">

                <!-- MAIN CSS -->
                <link rel="stylesheet" href="<?= base_url(RoutesConstant::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'css/style.css') ?>">
            </head>

            <body id="top">

                <div id="overlayer"></div>
                <div class="loader">
                    <div class="spinner-border text-primary" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>

                <div class="site-wrap">
                    <!-- render navbar -->
                    <?= TemplateEngine::view(new Navbar()) ?>
                
                    <?= $this->content(); ?>

                    <!-- render footer -->
                    <?= TemplateEngine::view(new Footer()) ?>

                </div>

                <!-- SCRIPTS -->
                <script src="<?= base_url(RoutesConstant::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'js/jquery.min.js') ?>"></script>
                <script src="<?= base_url(RoutesConstant::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'js/bootstrap.bundle.min.js') ?>"></script>
                <script src="<?= base_url(RoutesConstant::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'js/isotope.pkgd.min.js') ?>"></script>
                <script src="<?= base_url(RoutesConstant::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'js/stickyfill.min.js') ?>"></script>
                <script src="<?= base_url(RoutesConstant::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'js/jquery.fancybox.min.js') ?>"></script>
                <script src="<?= base_url(RoutesConstant::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'js/jquery.easing.1.3.js') ?>"></script>

                <script src="<?= base_url(RoutesConstant::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'js/jquery.waypoints.min.js') ?>"></script>
                <script src="<?= base_url(RoutesConstant::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'js/jquery.animateNumber.min.js') ?>"></script>
                <script src="<?= base_url(RoutesConstant::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'js/owl.carousel.min.js') ?>"></script>

                <script src="<?= base_url(RoutesConstant::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'js/bootstrap-select.min.js') ?>"></script>

                <script src="<?= base_url(RoutesConstant::LANDINGPAGE_ASSETS_RELATIVE_PATH . 'js/custom.js') ?>"></script>


            </body>

            </html>
            
        <?php return $this->endParsingAndGetHtml();
    }


}