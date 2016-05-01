<?php

include_once "model/Request.php";

class RequestController
{

	public function createRequest($protocol, $method, $uri, $server_addr)
	{
		$uri_array = explode("/", $uri);

		return new Request(
			    $protocol,
				$method,
				$uri_array[2],
				$this->getParams($uri_array[3]),
				$server_addr);
		
	}	


	public function getParams($string_params)
	{
		$replace = str_replace ("?" , "" , $string_params);
		$params = explode("&", $replace);
		$params_map = array();

		foreach ($params as $value) {
			$explodeValue = explode("=", $value);
			$params_map[$explodeValue[0]] = $explodeValue[1];
		}

		return $params_map;	
	}






}