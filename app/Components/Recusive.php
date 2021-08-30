<?php

namespace App\Components;

class Recusive {

	private $data;
	private $htmlSelect = '';

	public function __construct($data) {
		$this->data = $data;
	}

	public function CategoryRecusive($CategoryParent = 0, $id = 0, $text = '') {

		foreach($this->data as $value) {
			if($value['category_parent'] == $id) {
				if(!empty($CategoryParent) && $CategoryParent == $value['category_id']) {
					$this->htmlSelect.='<option selected value="'. $value['category_id'] .'">'. $text . $value['category_name'] .'</option>';
				} else {
					$this->htmlSelect.='<option value="'. $value['category_id'] .'">'. $text . $value['category_name'] .'</option>';
				}
				$this->CategoryRecusive($CategoryParent, $value['category_id'], $text. ' &nbsp;&nbsp;&nbsp; ');
			}
		}
		return $this->htmlSelect;
	}
}
