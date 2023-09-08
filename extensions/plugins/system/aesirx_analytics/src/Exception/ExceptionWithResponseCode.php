<?php

namespace Aesirx\System\AesirxAnalytics\Exception;

use Exception;
use Throwable;

class ExceptionWithResponseCode extends Exception
{

	private $responseCode;

	public function __construct(string $message, int $responseCode, int $code = 0, ?Throwable $previous = null)
	{
		$this->responseCode = $responseCode;
		parent::__construct($message, $code, $previous);
	}

	public function getResponseCode(): int
	{
		return $this->responseCode;
	}
}