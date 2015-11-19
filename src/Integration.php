<?php

class Pronamic_WP_Pay_Gateways_AbnAmro_IDealHosted_Integration extends Pronamic_WP_Pay_Gateways_IDealBasic_AbstractIntegration {
	public function __construct() {
		$this->id         = 'abnamro-ideal-hosted';
		$this->name       = 'ABN AMRO - iDEAL Hosted';
		$this->provider   = 'abnamro';
		$this->deprecated = true;
	}

	public function get_config_factory_class() {
		return 'Pronamic_WP_Pay_Gateways_IDealBasic_ConfigFactory';
	}
}
