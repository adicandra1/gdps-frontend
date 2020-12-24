<?php namespace App\Views\Portal\Profile\PDF;

use App\Libraries\View\BaseView;

class PDFBaseView extends BaseView
{
    public function render(): string
    {
        $this->startHtmlParsing(); ?>
        
            
        
        <?php return $this->endParsingAndGetHtml();
    }
}