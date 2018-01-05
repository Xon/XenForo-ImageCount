<?php

class SV_ImageCount_XenForo_DataWriter_ConversationMessage extends XFCP_SV_ImageCount_XenForo_DataWriter_ConversationMessage
{
    protected function _checkMessageValidity()
    {
        if ($this->getOption(self::OPTION_MAX_IMAGES))
        {
            $conversation = $this->getMergedData();
            /** @var SV_ImageCount_XenForo_Model_Conversation $conversationModel */
            $conversationModel = $this->_getConversationModel();
            $MaxImageCount = $conversationModel->getMaxImageCount($conversation);
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

