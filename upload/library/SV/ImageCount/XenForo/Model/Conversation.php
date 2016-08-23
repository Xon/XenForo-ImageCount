<?php

class SV_ImageCount_XenForo_Model_Conversation extends XFCP_SV_ImageCount_XenForo_Model_Conversation
{
    public function getMaxImageCount(array $conversation = null, array $viewingUser = null)
    {
        $this->standardizeViewingUserReference($viewingUser);

        return XenForo_Permission::hasPermission($viewingUser['permissions'], 'conversation', 'sv_MaxImageCount');
    }
}