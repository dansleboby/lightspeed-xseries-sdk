<?php

namespace LightSpeed\XSeries\Requests\Tags;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * DeleteTagByID
 */
class DeleteTagById extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/tags/{$this->tagId}";
	}


	/**
	 * @param string $tagId The tag id.
	 */
	public function __construct(
		protected string $tagId,
	) {
	}
}
