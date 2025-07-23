<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\Quotes\GetQuoteQuoteId;
use LightSpeed\XSeries\Requests\Quotes\GetQuotes;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Quotes extends BaseResource
{
	/**
	 * @param string $quoteId ID of the quote to get
	 */
	public function getQuoteQuoteId(string $quoteId): Response
	{
		return $this->connector->send(new GetQuoteQuoteId($quoteId));
	}


	/**
	 * @param int $after The lower limit for the quote id to be included in the response. For proper pagination, it needs to be the quote id of the last item in the response from your previous request.
	 * @param int $limit The maximum number of items to be returned in the response.
	 */
	public function getQuotes(?int $after = null, ?int $limit = null): Response
	{
		return $this->connector->send(new GetQuotes($after, $limit));
	}
}
