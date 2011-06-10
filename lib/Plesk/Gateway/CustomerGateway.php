<?php

/** @var Plesk_Gateway_Parameters */
require_once 'Plesk/Gateway/Parameters.php';

interface Plesk_Gateway_CustomerGateway
{

	/**
	 * create a new customer
	 * @param string $name
	 * @param Plesk_Gateway_Parameters $params
	 * @return Plesk_Gateway_Response
	 */
	public function create($name, Plesk_Gateway_Parameters $params);

}
