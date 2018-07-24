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
	}

	public function getName($id_array)
	{
		return $this->instance->__soapCall('getStudentName', $id_array);
	}
}

$client = new client;