<?php

/**
 * Title: ABN AMRO - iDEAL Hosted - Config test
 * Description:
 * Copyright: Copyright (c) 2005 - 2016
 * Company: Pronamic
 * @author Remco Tolsma
 * @version 1.0.0
 */
class Pronamic_WP_Pay_Gateways_AbnAmro_IDealHosted_ConfigTest extends PHPUnit_Framework_TestCase {
	public function test_config() {
		$config = new Pronamic_WP_Pay_Gateways_AbnAmro_IDealHosted_Config();

		$expected = 'https://abnamro.ideal-payment.de/ideal/mpiPayInitFortis.do';

		$url = $config->get_payment_server_url();

		$this->assertEquals( $expected, $url );
	}
}
