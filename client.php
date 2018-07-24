<?php

/**
 * 
 */
class client
{
	function __construct()
	{
		$params = array(
								 'location' => 'http://localhost/php-soap/server.php',
								 'uri' => 'http://localhost/php-soap/server.php',
								 'trace' => 1
		 						 );
		$this->instance = new SoapClient(NULL, $params);

		// set the header
		$auth_param = new stdClass();
		$auth_param->username = 'admin';
		$auth_param->password = 'admin';
		$header_params = new SoapVar($auth_param, SOAP_ENC_OBJECT);
		$header = new SoapHeader('localhost', 'authenticate', $header_params, false);
		$this->instance->__setSoapHeaders(array($header));
	}

	public function getName($id_array)
	{
		return $this->instance->__soapCall('getStudentName', $id_array);
	}
}

$client = new client;