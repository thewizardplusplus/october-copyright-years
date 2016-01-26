<?php
namespace Thewizardplusplus\CopyrightYears;

use Lang;

class LangUtils
{
    public static function name($name)
    {
        return "thewizardplusplus.copyrightyears::lang.$name";
    }

    public static function plugin($name)
    {
        return self::name("plugin.$name");
    }
}
