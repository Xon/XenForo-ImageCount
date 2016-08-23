<?php

class SV_ImageCount_XenForo_DataWriter_ConversationMessage extends XFCP_SV_ImageCount_XenForo_DataWriter_ConversationMessage
{
    protected function _checkMessageValidity()
    {
        if ($this->getOption(self::OPTION_MAX_IMAGES))
        {
            $conversation = $this->getMergedData();
            $MaxImageCount = $this->_getConversationModel()->getMaxImageCount($conversation);
            if ($MaxImageCount)
            {
                if ($MaxImageCount < 0)
                {
                    $MaxImageCount = 0;
                }
                $this->setOption(self::OPTION_MAX_IMAGES, $MaxImageCount);
            }
        }
        parent::_checkMessageValidity();
    }
}