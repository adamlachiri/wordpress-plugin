<?php

/*
*@package adamlachiri
*/

namespace adamlachiri;

class Deactivate
{
    public static function deactivate()
    {
        flush_rewrite_rules();
    }

    public static function register()
    {
        register_deactivation_hook(__FILE__, [Self::class, "deactivate"]);
    }
}
