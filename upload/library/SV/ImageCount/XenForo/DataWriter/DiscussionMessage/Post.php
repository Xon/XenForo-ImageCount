<?php

class SV_ImageCount_XenForo_DataWriter_DiscussionMessage_Post extends XFCP_SV_ImageCount_XenForo_DataWriter_DiscussionMessage_Post
{
    protected function _checkMessageValidity()
    {
        if ($this->getOption(self::OPTION_MAX_IMAGES))
        {
            $forum = $this->_getForumInfo();
            if ($forum && isset($forum['node_id']))
            {
                $MaxImageCount = $this->_getForumModel()->getMaxImageCount($forum);
                if ($MaxImageCount)
                {
                    if ($MaxImageCount < 0)
                    {
                        $MaxImageCount = 0;
                    }
                    $this->setOption(self::OPTION_MAX_IMAGES, $MaxImageCount);
                }
            }
        }
        parent::_checkMessageValidity();
    }

    protected function _getForumModel()
    {
        return $this->getModelFromCache('XenForo_Model_Forum');
    }
}