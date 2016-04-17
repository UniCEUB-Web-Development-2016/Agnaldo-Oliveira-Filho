<?php

include_once "model/Request.php";
include_once "control/UserController.php";
include_once "control/SeriesController.php";

class ResourceController
{

	private $controlMap = 
	[
		"series" => "SeriesController",
		"user" => "UserController",
	];

	public function createResource($request)
	{
		return new $this->controlMap[$request->get_resource()]();
	}
}