<?php
 /**
 * @category  Mageants Part Finder
 * @package   Mageants_PartFinder
 * @copyright Copyright (c) 2017 Mageants
 * @author    Mageants Team <info@mageants.com>
 */
 
namespace Mageants\PartFinder\Model;

class PartFinderImportFilesHistory extends \Magento\Framework\Model\AbstractModel
{
    /**
     * Model Initialization
     *
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
		
		$this->_init('Mageants\PartFinder\Model\ResourceModel\PartFinderImportFilesHistory');
    }
	
    public function getDefaultValues()
    {
        $values = [];

        return $values;
    }
}
