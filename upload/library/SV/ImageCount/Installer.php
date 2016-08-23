<?php

class SV_ImageCount_Installer
{
    public static function install($existingAddOn, $addOnData, SimpleXMLElement $xml)
    {
        $version = isset($existingAddOn['version_id']) ? $existingAddOn['version_id'] : 0;
        $db = XenForo_Application::getDb();

    }

    public static function uninstall()
    {
        $db = XenForo_Application::getDb();

        $db->query("
            DELETE FROM xf_permission_entry
            WHERE permission_id in (
                'sv_MaxImageCount'
            )
        ");

        $db->query("
            DELETE FROM xf_permission_content_entry
            WHERE permission_id in (
                'sv_MaxImageCount'
            )
        ");

        XenForo_Application::defer('Permission', array(), 'Permission', true);
    }
}
