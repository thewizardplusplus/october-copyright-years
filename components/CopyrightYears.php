<?php
namespace Thewizardplusplus\CopyrightYears\Components;

use Cms\Classes\ComponentBase;
use Thewizardplusplus\CopyrightYears\LangUtils;

class CopyrightYears extends ComponentBase
{
    public $startYear = 0;
    public $endYear = 0;

    public function componentDetails()
    {
        return [
            'name' => LangUtils::plugin('name'),
            'description' => LangUtils::name('component.description')
        ];
    }

    public function onRun()
    {
        $this->startYear = CopyrightYearsGenerator::getStartYear();
        $this->page['startYear'] = $this->startYear;

        $this->endYear = CopyrightYearsGenerator::getEndYear();
        $this->page['endYear'] = $this->endYear;
    }
}
