<?php

namespace LightSpeed\XSeries\Requests\SerialNumbers;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * get-serialnumber
 *
 * Returns a single serial number.
 */
class GetSerialnumber extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/serialnumbers/{$this->serialnumberId}";
	}


	/**
	 * @param string $serialnumberId The serial number id
	 */
	public function __construct(
		protected string $serialnumberId,
	) {
	}
}
