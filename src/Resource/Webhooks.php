<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\Webhooks\CreateWebhook;
use LightSpeed\XSeries\Requests\Webhooks\DeleteWebhook;
use LightSpeed\XSeries\Requests\Webhooks\GetSingleWebhook;
use LightSpeed\XSeries\Requests\Webhooks\ListWebhooks;
use LightSpeed\XSeries\Requests\Webhooks\UpdateWebhook;
use LightSpeed\XSeries\Resource;
use Saloon\Contracts\Response;

class Webhooks extends Resource
{
	/**
	 * @param string $webhookId
	 */
	public function getSingleWebhook(string $webhookId): Response
	{
		return $this->connector->send(new GetSingleWebhook($webhookId));
	}


	/**
	 * @param string $webhookId
	 */
	public function updateWebhook(string $webhookId): Response
	{
		return $this->connector->send(new UpdateWebhook($webhookId));
	}


	/**
	 * @param string $webhookId
	 */
	public function deleteWebhook(string $webhookId): Response
	{
		return $this->connector->send(new DeleteWebhook($webhookId));
	}


	public function listWebhooks(): Response
	{
		return $this->connector->send(new ListWebhooks());
	}


	/**
	 * @param mixed $id
	 * @param mixed $retailerId
	 * @param mixed $userId
	 * @param mixed $url
	 * @param mixed $active
	 * @param mixed $type
	 */
	public function createWebhook(
		mixed $id,
		mixed $retailerId,
		mixed $userId,
		mixed $url,
		mixed $active,
		mixed $type,
	): Response
	{
		return $this->connector->send(new CreateWebhook($id, $retailerId, $userId, $url, $active, $type));
	}
}
