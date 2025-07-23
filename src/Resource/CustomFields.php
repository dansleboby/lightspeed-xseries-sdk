<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\CustomFields\DefineNewCustomField;
use LightSpeed\XSeries\Requests\CustomFields\DeleteCustomField;
use LightSpeed\XSeries\Requests\CustomFields\ListCustomFieldDefinitions;
use LightSpeed\XSeries\Requests\CustomFields\ListCustomFieldValues;
use LightSpeed\XSeries\Requests\CustomFields\SetNewCustomFieldValues;
use LightSpeed\XSeries\Requests\CustomFields\UpdateCustomField;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class CustomFields extends BaseResource
{
	/**
	 * @param string $entity (Required) (string) The entity type.
	 * @param string $accept
	 */
	public function listCustomFieldDefinitions(?string $entity = null, ?string $accept = null): Response
	{
		return $this->connector->send(new ListCustomFieldDefinitions($entity, $accept));
	}


	/**
	 * @param mixed $entity
	 * @param mixed $name
	 * @param mixed $title
	 * @param mixed $type
	 * @param mixed $visibleInUi
	 * @param mixed $editableInUi
	 * @param mixed $printOnReceipt
	 * @param string $contentType
	 * @param string $accept
	 */
	public function defineNewCustomField(
		mixed $entity = null,
		mixed $name = null,
		mixed $title = null,
		mixed $type = null,
		mixed $visibleInUi = null,
		mixed $editableInUi = null,
		mixed $printOnReceipt = null,
		?string $contentType = null,
		?string $accept = null,
	): Response
	{
		return $this->connector->send(new DefineNewCustomField($entity, $name, $title, $type, $visibleInUi, $editableInUi, $printOnReceipt, $contentType, $accept));
	}


	/**
	 * @param string $customFieldId
	 * @param mixed $title
	 * @param mixed $visibleInUi
	 * @param mixed $editableInUi
	 * @param mixed $printOnReceipt
	 * @param string $contentType
	 * @param string $accept
	 */
	public function updateCustomField(
		string $customFieldId,
		mixed $title = null,
		mixed $visibleInUi = null,
		mixed $editableInUi = null,
		mixed $printOnReceipt = null,
		?string $contentType = null,
		?string $accept = null,
	): Response
	{
		return $this->connector->send(new UpdateCustomField($customFieldId, $title, $visibleInUi, $editableInUi, $printOnReceipt, $contentType, $accept));
	}


	/**
	 * @param string $customFieldId
	 */
	public function deleteCustomField(string $customFieldId): Response
	{
		return $this->connector->send(new DeleteCustomField($customFieldId));
	}


	/**
	 * @param string $entity (Required) (string) The entity type.
	 * @param string $entityId (Required) (string) The entity ID.
	 * @param string $accept
	 */
	public function listCustomFieldValues(
		?string $entity = null,
		?string $entityId = null,
		?string $accept = null,
	): Response
	{
		return $this->connector->send(new ListCustomFieldValues($entity, $entityId, $accept));
	}


	/**
	 * @param mixed $entity
	 * @param mixed $entityId
	 * @param mixed $values
	 * @param string $contentType
	 * @param string $accept
	 */
	public function setNewCustomFieldValues(
		mixed $entity = null,
		mixed $entityId = null,
		mixed $values = null,
		?string $contentType = null,
		?string $accept = null,
	): Response
	{
		return $this->connector->send(new SetNewCustomFieldValues($entity, $entityId, $values, $contentType, $accept));
	}
}
