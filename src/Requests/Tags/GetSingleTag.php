<?php

namespace LightSpeed\XSeries\Requests\Tags;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a single tag
 */
class GetSingleTag extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/tags/{$this->tagId}";
	}


	/**
	 * @param string $tagId
	 */
	public function __construct(
		protected string $tagId,
	) {
	}
}
