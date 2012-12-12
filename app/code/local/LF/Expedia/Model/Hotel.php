<?php

class LF_Expedia_Model_Hotel extends Mage_Core_Model_Abstract
{
    protected function _construct()
    {
        parent::_construct();
        $this->_init('expedia/hotel');
    }

    private function __list();

    public function getCollection();
}
