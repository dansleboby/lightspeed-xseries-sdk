<?php

namespace LightSpeed\XSeries\Requests\VariantAttributes;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List Variant Attributes
 */
class ListVariantAttributes extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/variant_attributes";
	}


	/**
	 * @param null|string $deleted (boolean) Indicates whether deleted items should be included in the response.
	 */
	public function __construct(
		protected ?string $deleted = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['deleted' => $this->deleted]);
	}
}
