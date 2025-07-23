<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\Tags\GetSingleTag;
use LightSpeed\XSeries\Requests\Tags\ListTags;
use LightSpeed\XSeries\Resource;
use Saloon\Contracts\Response;

class Tags extends Resource
{
	/**
	 * @param string $before (int64) The upper limit for the version numbers to be included in the response.
	 * @param string $pageSize (integer) The maximum number of items to be returned in the response.
	 * @param string $deleted (bool) Whether to include deleted resources.
	 */
	public function listTags(?string $before, ?string $pageSize, ?string $deleted): Response
	{
		return $this->connector->send(new ListTags($before, $pageSize, $deleted));
	}


	/**
	 * @param string $tagId
	 */
	public function getSingleTag(string $tagId): Response
	{
		return $this->connector->send(new GetSingleTag($tagId));
	}
}
