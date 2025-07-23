<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\CustomFields\DefineNewCustomField;
use LightSpeed\XSeries\Requests\CustomFields\DeleteCustomField;
use LightSpeed\XSeries\Requests\CustomFields\ListCustomFieldDefinitions;
use LightSpeed\XSeries\Requests\CustomFields\ListCustomFieldValues;
use LightSpeed\XSeries\Requests\CustomFields\SetNewCustomFieldValues;
use LightSpeed\XSeries\Requests\CustomFields\UpdateCustomField;
use LightSpeed\XSeries\Resource;
use Saloon\Contracts\Response;

class CustomFields extends Resource
{
	/**
	 * @param string $entity (Required) (string) The entity type.
	 */
	public function listCustomFieldDefinitions(?string $entity): Response
	{
		return $this->connector->send(new ListCustomFieldDefinitions($entity));
	}


	/**
	 * @param mixed $entity
	 * @param mixed $name
	 * @param mixed $title
	 * @param mixed $type
	 * @param mixed $visibleInUi
	 * @param mixed $editableInUi
	 * @param mixed $printOnReceipt
	 */
	public function defineNewCustomField(
		mixed $entity,
		mixed $name,
		mixed $title,
		mixed $type,
		mixed $visibleInUi,
		mixed $editableInUi,
		mixed $printOnReceipt,
	): Response
	{
		return $this->connector->send(new DefineNewCustomField($entity, $name, $title, $type, $visibleInUi, $editableInUi, $printOnReceipt));
	}


	/**
	 * @param string $customFieldId
	 * @param mixed $title
	 * @param mixed $visibleInUi
	 * @param mixed $editableInUi
	 * @param mixed $printOnReceipt
	 */
	public function updateCustomField(
		string $customFieldId,
		mixed $title,
		mixed $visibleInUi,
		mixed $editableInUi,
		mixed $printOnReceipt,
	): Response
	{
		return $this->connector->send(new UpdateCustomField($customFieldId, $title, $visibleInUi, $editableInUi, $printOnReceipt));
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
	 */
	public function listCustomFieldValues(?string $entity, ?string $entityId): Response
	{
		return $this->connector->send(new ListCustomFieldValues($entity, $entityId));
	}


	/**
	 * @param mixed $entity
	 * @param mixed $entityId
	 * @param mixed $values
	 */
	public function setNewCustomFieldValues(mixed $entity, mixed $entityId, mixed $values): Response
	{
		return $this->connector->send(new SetNewCustomFieldValues($entity, $entityId, $values));
	}
}
