<?php
class Etsb_Archive_Model_Loader{
    protected $_options;
	const BANNERLOADER_PIE = 'pie';
	const BANNERLOADER_BAR = 'bar';
	const BANNERLOADER_NONE = 'none';     
    
    public function toOptionArray(){
        if (!$this->_options) {
			$this->_options[] = array(
			   'value'=>self::BANNERLOADER_PIE,
			   'label'=>Mage::helper('archive')->__('Pie')
			);
			$this->_options[] = array(
			   'value'=>self::BANNERLOADER_BAR,
			   'label'=>Mage::helper('archive')->__('Bar')
			);
			$this->_options[] = array(
			   'value'=>self::BANNERLOADER_NONE,
			   'label'=>Mage::helper('archive')->__('None')
			);
		}
		return $this->_options;
	}
}