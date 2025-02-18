<?php
class Etsb_Photoeditor_Model_Loader{
    protected $_options;
	const BANNERLOADER_PIE = 'pie';
	const BANNERLOADER_BAR = 'bar';
	const BANNERLOADER_NONE = 'none';     
    
    public function toOptionArray(){
        if (!$this->_options) {
			$this->_options[] = array(
			   'value'=>self::BANNERLOADER_PIE,
			   'label'=>Mage::helper('photoeditor')->__('Pie')
			);
			$this->_options[] = array(
			   'value'=>self::BANNERLOADER_BAR,
			   'label'=>Mage::helper('photoeditor')->__('Bar')
			);
			$this->_options[] = array(
			   'value'=>self::BANNERLOADER_NONE,
			   'label'=>Mage::helper('photoeditor')->__('None')
			);
		}
		return $this->_options;
	}
}