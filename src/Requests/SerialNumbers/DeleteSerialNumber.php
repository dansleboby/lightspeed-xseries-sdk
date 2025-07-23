<?php

namespace LightSpeed\XSeries\Requests\SerialNumbers;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a serial number
 */
class DeleteSerialNumber extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/serialnumbers/{$this->serialnumberId}";
	}


	/**
	 * @param string $serialnumberId
	 */
	public function __construct(
		protected string $serialnumberId,
	) {
	}
}
