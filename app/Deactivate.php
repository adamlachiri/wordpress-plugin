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
}
