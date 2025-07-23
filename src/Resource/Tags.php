<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\Tags\CreateTag;
use LightSpeed\XSeries\Requests\Tags\DeleteTagById;
use LightSpeed\XSeries\Requests\Tags\GetTagById;
use LightSpeed\XSeries\Requests\Tags\ListTags;
use LightSpeed\XSeries\Requests\Tags\UpdateTagById;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Tags extends BaseResource
{
	/**
	 * @param int $after The lower limit for the version numbers to be included in the response.
	 * @param int $before The upper limit for the version numbers to be included in the response.
	 * @param int $pageSize The maximum number of items to be returned in the response.
	 * @param bool $deleted Indicates whether deleted items should be included in the response.
	 */
	public function listTags(
		?int $after = null,
		?int $before = null,
		?int $pageSize = null,
		?bool $deleted = null,
	): Response
	{
		return $this->connector->send(new ListTags($after, $before, $pageSize, $deleted));
	}


	public function createTag(): Response
	{
		return $this->connector->send(new CreateTag());
	}


	/**
	 * @param string $tagId The tag id.
	 */
	public function getTagById(string $tagId): Response
	{
		return $this->connector->send(new GetTagById($tagId));
	}


	/**
	 * @param string $tagId The tag id
	 */
	public function updateTagById(string $tagId): Response
	{
		return $this->connector->send(new UpdateTagById($tagId));
	}


	/**
	 * @param string $tagId The tag id.
	 */
	public function deleteTagById(string $tagId): Response
	{
		return $this->connector->send(new DeleteTagById($tagId));
	}
}
