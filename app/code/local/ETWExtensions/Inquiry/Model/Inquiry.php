<?php

class ETWExtensions_Inquiry_Model_Inquiry extends Mage_Core_Model_Abstract {

    public function _construct() {
        parent::_construct();
        $this->_init('inquiry/inquiry');
    }

}