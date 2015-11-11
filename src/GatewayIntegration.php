<?php

class Pronamic_WP_Pay_Gateways_AbnAmro_IDealHosted_GatewayIntegration {
	public function __construct() {
		$this->id = 'abnamro-ideal-easy';
	}

	public function get_config_factory_class() {
		return 'Pronamic_WP_Pay_Gateways_IDealBasic_ConfigFactory';
	}

	public function get_config_class() {
		return 'Pronamic_WP_Pay_Gateways_IDealBasic_Config';
	}

	public function get_gateway_class() {
		return 'Pronamic_WP_Pay_Gateways_IDealBasic_Gateway';
	}
}
