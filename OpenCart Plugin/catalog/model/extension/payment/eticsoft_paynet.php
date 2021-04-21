<?php
class ModelExtensionPaymentEticSoftPaynet extends Model {
	public function getMethod($address, $total) {

			$method_data = array(
				'code'       => 'eticsoft_paynet',
				'title'      => 'Kredi kartı ile öde',
				'terms'      => '',
				'sort_order' => 1
			);
		return $method_data;
	}
}