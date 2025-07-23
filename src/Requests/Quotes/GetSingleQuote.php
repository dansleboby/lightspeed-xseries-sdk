<?php

namespace LightSpeed\XSeries\Requests\Quotes;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a single quote
 */
class GetSingleQuote extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/quote/{$this->quoteId}";
	}


	/**
	 * @param string $quoteId
	 */
	public function __construct(
		protected string $quoteId,
	) {
	}
}
