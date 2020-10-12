<?php 
class ModelExtensionPaymentEticSoft_Paynet extends Model {
	public function install() {
		$this->load->model('setting/setting');	
		$this->config->set('eticsoft_paynet_test_mode', 'on');
		return true;
	}
}
