<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\Quotes\GetSingleQuote;
use LightSpeed\XSeries\Requests\Quotes\ListQuotes;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Quotes extends BaseResource
{
	/**
	 * @param string $quoteId
	 * @param string $accept
	 */
	public function getSingleQuote(string $quoteId, ?string $accept = null): Response
	{
		return $this->connector->send(new GetSingleQuote($quoteId, $accept));
	}


	/**
	 * @param string $pageSize (integer) The maximum number of items to be returned in the response.
	 * @param string $after (int64) The lower limit for the version numbers to be included in the response.
	 * @param string $accept
	 */
	public function listQuotes(?string $pageSize = null, ?string $after = null, ?string $accept = null): Response
	{
		return $this->connector->send(new ListQuotes($pageSize, $after, $accept));
	}
}
