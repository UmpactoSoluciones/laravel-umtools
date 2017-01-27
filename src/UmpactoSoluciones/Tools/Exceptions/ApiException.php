<?php

namespace UmpactoSoluciones\Tools\Exceptions;

use Symfony\Component\HttpKernel\Exception\HttpException;

class ApiException extends HttpException
{

	public $errors;

	public function __construct($errors = [], \Exception $previous = null,array $headers = array(),$code = 0)
	{

		parent::__construct(400,"There are an error on your request",$previous,$headers,400);
		$this->errors = $errors;
	}

}
