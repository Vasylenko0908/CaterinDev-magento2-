<?php
namespace Olegnax\Athlete2\Model\Config\Settings\Blog;

class PostListStyle implements \Magento\Framework\Option\ArrayInterface
{
	public function toOptionArray() {
		$optionArray = [ ];
		$array		 = $this->toArray();
		foreach ( $array as $key => $value ) {
			$optionArray[] = [ 'value' => $key, 'label' => $value ];
		}

		return $optionArray;
	}

    public function toArray()
    {
        return [
			'' => __('Use Global'),
			'image-top' => __('Image Top'),
            'image-left' => __('Image Left'),
            'above-image' => __('Content Above Image'),
        ];
    }
}
