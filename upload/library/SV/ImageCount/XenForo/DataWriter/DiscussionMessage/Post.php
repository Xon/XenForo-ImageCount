<?php

class SV_ImageCount_XenForo_DataWriter_DiscussionMessage_Post extends XFCP_SV_ImageCount_XenForo_DataWriter_DiscussionMessage_Post
{
    public function setExtraData($name, $value)
    {
        if ($name == self::DATA_FORUM)
        {
            $MaxImageCount = $this->_getForumModel()->getMaxImageCount($value);
            if ($MaxImageCount)
            {
                 $this->setOption(self::OPTION_MAX_IMAGES, $MaxImageCount);
            }
        }

        return setExtraData($name, $value);
    }


    protected function _getForumModel()
    {
        return $this->getModelFromCache('XenForo_Model_Forum');
    }
}