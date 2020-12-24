<?php namespace App\Views\Portal;

use App\Libraries\View\BaseView;
use App\Libraries\View\TemplateEngine;
use App\Views\Portal\Partials\HeadHTML;
use App\Views\ViewRoutesContract;

abstract class HtmlSkeleton extends BaseView {

    private string $htmlTitle;

    public function __construct(string $htmlTitle = "")
    {
        $this->htmlTitle = $htmlTitle;
    }

    abstract function bodySection() : string;

    public function render(): string
    {
        $this->startHtmlParsing(); ?>

        <?= TemplateEngine::view(new HeadHTML($this->htmlTitle)) ?>
        
        <body>

            <?= $this->bodySection() ?>
                    
            <!-- base:js -->
            <script src="<?= base_url(ViewRoutesContract::PORTAL_ASSETS_RELATIVE_PATH . 'vendors/base/vendor.bundle.base.js') ?>"></script>
            <!-- endinject -->
            <!-- Plugin js for this page-->
            
            <!-- End plugin js for this page-->
            <!-- inject:js -->
            <script src="<?= base_url(ViewRoutesContract::PORTAL_ASSETS_RELATIVE_PATH . 'js/template.js') ?>"></script>
            <!-- endinject -->

            
        </body>

        </html>
        
        <?php return $this->endParsingAndGetHtml();
    }
}

