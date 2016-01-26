<?php
namespace Thewizardplusplus\CopyrightYears;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public $require = ['RainLab.Blog'];

    public function pluginDetails()
    {
        return [
            'name' => 'Copyright Years',
            'description' =>
                'Provides the component for calculation and displaying of '
                . 'copyright years.',
            'author' => 'thewizardplusplus',
            'icon' => 'icon-copyright',
            'homepage' =>
                'https://github.com/thewizardplusplus/october-copyright-years'
        ];
    }

    public function registerComponents()
    {
        return [
            'Thewizardplusplus\CopyrightYears\Components\CopyrightYears' =>
                'copyrightYears'
        ];
    }
}
