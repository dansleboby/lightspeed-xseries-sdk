<?php

namespace LightSpeed\XSeries\Requests\RemoteRules;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create remote rule
 */
class CreateRemoteRule extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/workflows/remote_rules";
	}


	/**
	 * @param null|mixed $url
	 */
	public function __construct(
		protected mixed $url = null,
	) {
	}


	public function defaultBody(): array
	{
		return array_filter(['url' => $this->url]);
	}
}
