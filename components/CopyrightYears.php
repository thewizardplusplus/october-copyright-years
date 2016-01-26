<?php
namespace Thewizardplusplus\CopyrightYears\Components;

use Cms\Classes\ComponentBase;

class CopyrightYears extends ComponentBase
{
    public $startYear = 0;
    public $endYear = 0;

    public function componentDetails()
    {
        return [
            'name' => 'Copyright Years',
            'description' => 'Calculate and display of copyright years.'
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
