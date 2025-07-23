<?php

namespace LightSpeed\XSeries\Requests\Taxes;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a single tax by ID
 */
class GetSingleTaxById extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/taxes/{$this->taxId}";
	}


	/**
	 * @param string $taxId
	 */
	public function __construct(
		protected string $taxId,
	) {
	}
}
