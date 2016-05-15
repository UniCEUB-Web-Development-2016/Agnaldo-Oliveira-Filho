<?php

include_once "model/Request.php";
include_once "control/UserController.php";
include_once "control/SeriesController.php";
include_once "control/EpisodeController.php";
include_once "control/ListaController.php";

class ResourceController
{

	private $controlMap = 
	[
		"series" => "SeriesController",
		"user" => "UserController",
		"episode" => "EpisodeController",
		"lista" => "ListaController",
	];

	public function createResource($request)
	{
		return (new $this->controlMap[$request->get_resource()]())->register($request);
	}

	public function searchResource($request)
	{
		return (new $this->controlMap[$request->get_resource()]())->search($request);
	}

	public function removeResource($request)
	{
		return (new $this->controlMap[$request->get_resource()]())->remove($request);
	}
}