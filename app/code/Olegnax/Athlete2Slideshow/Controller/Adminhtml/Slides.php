<?php

/**
 * Olegnax Athlete Slideshow
 * 
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Olegnax.com license that is
 * available through the world-wide-web at this URL:
 * https://www.olegnax.com/license
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    Olegnax
 * @package     Olegnax_AthleteSlideshow
 * @copyright   Copyright (c) 2019 Olegnax (http://www.olegnax.com/)
 * @license     https://www.olegnax.com/license
 */


namespace Olegnax\Athlete2Slideshow\Controller\Adminhtml;

abstract class Slides extends \Magento\Backend\App\Action {

	protected $_coreRegistry;
	protected $_slidesFactory;

	/**
	 * @param \Magento\Backend\App\Action\Context $context
	 * @param \Magento\Framework\Registry $coreRegistry
	 */
	public function __construct(
	\Magento\Backend\App\Action\Context $context,
	\Magento\Framework\Registry $coreRegistry
	) {
		$this->_coreRegistry = $coreRegistry;
		parent::__construct( $context );
	}

	/**
	 * Init page
	 *
	 * @param \Magento\Backend\Model\View\Result\Page $resultPage
	 * @return \Magento\Backend\Model\View\Result\Page
	 */
	public function initPage( $resultPage ) {
		$resultPage->setActiveMenu( 'Olegnax_Core::Olegnax_Core' )
		->addBreadcrumb( __( 'Slideshow' ), __( 'Slideshow' ) )
		->addBreadcrumb( __( 'Athlete slider Slides' ), __( 'Athlete slider Slides' ) );
		return $resultPage;
	}

}
