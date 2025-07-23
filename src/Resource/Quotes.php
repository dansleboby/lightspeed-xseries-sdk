<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\Quotes\GetSingleQuote;
use LightSpeed\XSeries\Requests\Quotes\ListQuotes;
use LightSpeed\XSeries\Resource;
use Saloon\Contracts\Response;

class Quotes extends Resource
{
	/**
	 * @param string $quoteId
	 */
	public function getSingleQuote(string $quoteId): Response
	{
		return $this->connector->send(new GetSingleQuote($quoteId));
	}


	/**
	 * @param string $pageSize (integer) The maximum number of items to be returned in the response.
	 */
	public function listQuotes(?string $pageSize): Response
	{
		return $this->connector->send(new ListQuotes($pageSize));
	}
}
