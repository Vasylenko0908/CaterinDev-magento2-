<?php

namespace Olegnax\BannerSlider\Ui\Component\Listing\Column;

class Image extends \Magento\Ui\Component\Listing\Columns\Column {

	protected $_slidesFactory;

	public function __construct(
	\Magento\Framework\View\Element\UiComponent\ContextInterface $context, \Magento\Framework\View\Element\UiComponentFactory $uiComponentFactory, \Olegnax\BannerSlider\Model\SlidesFactory $slidesFactory, array $components = [], array $data = []
	) {
		$this->_slidesFactory = $slidesFactory;
		parent::__construct($context, $uiComponentFactory, $components, $data);
	}

	public function prepareDataSource(array $dataSource) {
		if (isset($dataSource['data']['items'])) {
			foreach ($dataSource['data']['items'] as &$item) {
				if ($item) {
					if (isset($item['slider_id'])) {

						$_item = $this->_slidesFactory->create()->load($item['slider_id']);
						if ($_item->hasImage()) {
							$item['image_src'] = $_item->getImageUrl();
						}
					}
				}
			}
		}
		return $dataSource;
	}

}
