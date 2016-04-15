<?php

class SV_ImageCount_Listener
{
    const AddonNameSpace = 'SV_ImageCount_';

    public static function load_class($class, array &$extend)
    {
        $extend[] = self::AddonNameSpace.$class;
    }
}
