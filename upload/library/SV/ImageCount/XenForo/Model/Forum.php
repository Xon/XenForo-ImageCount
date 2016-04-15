<?php

class SV_ImageCount_XenForo_Model_Forum extends XFCP_SV_ImageCount_XenForo_Model_Forum
{
    public function getMaxImageCount(array $forum, array $nodePermissions = null, array $viewingUser = null)
    {
        $this->standardizeViewingUserReferenceForNode($forum['node_id'], $viewingUser, $nodePermissions);

        return XenForo_Permission::hasContentPermission($nodePermissions, 'sv_MaxImageCount');
    }
}