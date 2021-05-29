<?php

class Swagger extends Controller
{
	/**
	 * Swagger view loading function
	 */
	public function index()
	{
		$this->loadView("Swagger", []);
	}

	/**
	 * Build the Swagger documentation using OpenAPI
	 */
	public function buildDocumentation() 
	{



        $openapi = $this->scan($_SERVER["DOCUMENT_ROOT"].'app');

        header('Content-Type: application/json');
        echo $openapi->toJSON();
	}
}
