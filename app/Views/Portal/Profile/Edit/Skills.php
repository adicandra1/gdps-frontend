<?php namespace App\Views\Portal\Profile\Edit;

use App\Libraries\View\BaseView;
use App\Views\DataContract\Skill;
use App\Views\ViewRoutesContract;

class Skills extends BaseView {

    /** @var Skill[] */
    private $selectedSkills;

    public function __construct(Skill ...$selectedSkills)
    {
       $this->selectedSkills = $selectedSkills;
    }

    public function render(): string
    {
        $this->startHtmlParsing(); ?>

            <form id="skills" name="skills">
                <div class="form-group row">
                    <div class="col-sm-12">
                        
                        
                    </div>
                    
                    <div class="col-sm-4">
                        <label for="skillSelect" class="form-label">Skills</label>
                        <select id="skillSelect" class="js-example-basic-multiple w-100" name="skills[]" multiple="multiple">
                            
                            <?php 
                            if(!empty($this->selectedSkills)) :

                                foreach($this->selectedSkills as $skill) : ?>
                                    <option value="<?= $skill->id ?>" selected> <?= $skill->name ?> </option>
                                <?php endforeach;
                                
                            endif 
                            ?>
                        </select>
                    </div>
                </div>

                
            </form>
            
        <?php
        return $this->endParsingAndGetHtml();
    }

    
    public static function script() : string {
        self::startHtmlParsing(); ?>

            <link rel="stylesheet" href="<?= base_url(ViewRoutesContract::PORTAL_ASSETS_RELATIVE_PATH . 'vendors/select2/select2.min.css'); ?>">
            <script src="<?= base_url(ViewRoutesContract::PORTAL_ASSETS_RELATIVE_PATH . 'vendors/select2/select2.min.js'); ?>"></script>

            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    $('.js-example-basic-multiple').select2({
                        ajax: {
                            url: "<?= route_to(ViewRoutesContract::PROFILE_SKILL_REPO) ?>",
                            delay: 250,
                            data: function (params) {
                                var query = {
                                    search: params.term,
                                }

                                // Query parameters will be ?search=[term]
                                return query;
                            },
                            cache: true
                        }
                    });
                });
            </script>

        <?php return self::endParsingAndGetHtml();
    }
    
}