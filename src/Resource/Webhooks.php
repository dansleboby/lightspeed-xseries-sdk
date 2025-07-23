<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\Webhooks\CreateWebhook;
use LightSpeed\XSeries\Requests\Webhooks\DeleteWebhook;
use LightSpeed\XSeries\Requests\Webhooks\GetSingleWebhook;
use LightSpeed\XSeries\Requests\Webhooks\ListWebhooks;
use LightSpeed\XSeries\Requests\Webhooks\UpdateWebhook;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Webhooks extends BaseResource
{
	/**
	 * @param string $webhookId
	 * @param string $accept
	 */
	public function getSingleWebhook(string $webhookId, ?string $accept = null): Response
	{
		return $this->connector->send(new GetSingleWebhook($webhookId, $accept));
	}


	/**
	 * @param string $webhookId
	 * @param string $accept
	 */
	public function updateWebhook(string $webhookId, ?string $accept = null): Response
	{
		return $this->connector->send(new UpdateWebhook($webhookId, $accept));
	}


	/**
	 * @param string $webhookId
	 * @param string $accept
	 */
	public function deleteWebhook(string $webhookId, ?string $accept = null): Response
	{
		return $this->connector->send(new DeleteWebhook($webhookId, $accept));
	}


	/**
	 * @param string $accept
	 */
	public function listWebhooks(?string $accept = null): Response
	{
		return $this->connector->send(new ListWebhooks($accept));
	}


	/**
	 * @param mixed $id
	 * @param mixed $retailerId
	 * @param mixed $userId
	 * @param mixed $url
	 * @param mixed $active
	 * @param mixed $type
	 * @param string $accept
	 */
	public function createWebhook(
		mixed $id = null,
		mixed $retailerId = null,
		mixed $userId = null,
		mixed $url = null,
		mixed $active = null,
		mixed $type = null,
		?string $accept = null,
	): Response
	{
		return $this->connector->send(new CreateWebhook($id, $retailerId, $userId, $url, $active, $type, $accept));
	}
}
