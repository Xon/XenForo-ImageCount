<?php

class SV_ImageCount_Listener
{
    public static function load_class($class, array &$extend)
    {
        $extend[] = 'SV_ImageCount_' . $class;
    }
}
