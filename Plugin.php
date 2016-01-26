<?php
namespace Thewizardplusplus\CopyrightYears;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public $require = ['RainLab.Blog'];

    public function pluginDetails()
    {
        return [
            'name' => LangUtils::plugin('name'),
            'description' => LangUtils::plugin('description'),
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
