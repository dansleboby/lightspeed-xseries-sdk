<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\PriceBooks\AddTheProductsToPriceBook;
use LightSpeed\XSeries\Requests\PriceBooks\CreatePriceBook;
use LightSpeed\XSeries\Requests\PriceBooks\CreateSinglePriceBook;
use LightSpeed\XSeries\Requests\PriceBooks\DeletePriceBook;
use LightSpeed\XSeries\Requests\PriceBooks\DeleteSomeEntriesFromPriceBook;
use LightSpeed\XSeries\Requests\PriceBooks\GetSinglePriceBook;
use LightSpeed\XSeries\Requests\PriceBooks\ListPriceBookProducts;
use LightSpeed\XSeries\Requests\PriceBooks\ListPriceBookProductsPerPriceBook;
use LightSpeed\XSeries\Requests\PriceBooks\ListPriceBooks;
use LightSpeed\XSeries\Requests\PriceBooks\UpdatePriceBook;
use LightSpeed\XSeries\Requests\PriceBooks\UpdateSinglePriceBook;
use LightSpeed\XSeries\Requests\PriceBooks\UpdateTheProductsInPriceBook;
use LightSpeed\XSeries\Requests\PriceBooks\UpdateTheProductsToPriceBook;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class PriceBooks extends BaseResource
{
	/**
	 * @param string $after (int64) The lower limit for the version numbers to be included in the response.
	 * @param string $before (int64) The upper limit for the version numbers to be included in the response.
	 * @param string $pageSize (integer) The maximum number of items to be returned in the response.
	 * @param string $accept
	 */
	public function listPriceBookProducts(
		?string $after = null,
		?string $before = null,
		?string $pageSize = null,
		?string $accept = null,
	): Response
	{
		return $this->connector->send(new ListPriceBookProducts($after, $before, $pageSize, $accept));
	}


	/**
	 * @param string $after (int64) The lower limit for the version numbers to be included in the response.
	 * @param string $before (int64) The upper limit for the version numbers to be included in the response.
	 * @param string $pageSize (integer) The maximum number of items to be returned in the response.
	 * @param string $accept
	 */
	public function listPriceBooks(
		?string $after = null,
		?string $before = null,
		?string $pageSize = null,
		?string $accept = null,
	): Response
	{
		return $this->connector->send(new ListPriceBooks($after, $before, $pageSize, $accept));
	}


	/**
	 * @param mixed $name
	 * @param mixed $customerGroupId
	 * @param mixed $id
	 * @param mixed $validFrom
	 * @param mixed $validTo
	 * @param mixed $restrictToPlatformKey
	 * @param mixed $outletId
	 * @param mixed $restrictToPlatformLabel
	 * @param mixed $customerGroup
	 * @param mixed $version
	 * @param mixed $deletedAt
	 * @param mixed $createdAt
	 * @param mixed $updatedAt
	 * @param mixed $outlet
	 * @param string $accept
	 */
	public function createPriceBook(
		mixed $name = null,
		mixed $customerGroupId = null,
		mixed $id = null,
		mixed $validFrom = null,
		mixed $validTo = null,
		mixed $restrictToPlatformKey = null,
		mixed $outletId = null,
		mixed $restrictToPlatformLabel = null,
		mixed $customerGroup = null,
		mixed $version = null,
		mixed $deletedAt = null,
		mixed $createdAt = null,
		mixed $updatedAt = null,
		mixed $outlet = null,
		?string $accept = null,
	): Response
	{
		return $this->connector->send(new CreatePriceBook($name, $customerGroupId, $id, $validFrom, $validTo, $restrictToPlatformKey, $outletId, $restrictToPlatformLabel, $customerGroup, $version, $deletedAt, $createdAt, $updatedAt, $outlet, $accept));
	}


	/**
	 * @param string $priceBookId
	 * @param string $accept
	 */
	public function getSinglePriceBook(string $priceBookId, ?string $accept = null): Response
	{
		return $this->connector->send(new GetSinglePriceBook($priceBookId, $accept));
	}


	/**
	 * @param string $priceBookId
	 * @param mixed $name
	 * @param mixed $customerGroupId
	 * @param mixed $id
	 * @param mixed $validFrom
	 * @param mixed $validTo
	 * @param mixed $restrictToPlatformKey
	 * @param mixed $outletId
	 * @param mixed $restrictToPlatformLabel
	 * @param mixed $customerGroup
	 * @param mixed $version
	 * @param mixed $deletedAt
	 * @param mixed $createdAt
	 * @param mixed $updatedAt
	 * @param mixed $outlet
	 * @param string $accept
	 */
	public function updatePriceBook(
		string $priceBookId,
		mixed $name = null,
		mixed $customerGroupId = null,
		mixed $id = null,
		mixed $validFrom = null,
		mixed $validTo = null,
		mixed $restrictToPlatformKey = null,
		mixed $outletId = null,
		mixed $restrictToPlatformLabel = null,
		mixed $customerGroup = null,
		mixed $version = null,
		mixed $deletedAt = null,
		mixed $createdAt = null,
		mixed $updatedAt = null,
		mixed $outlet = null,
		?string $accept = null,
	): Response
	{
		return $this->connector->send(new UpdatePriceBook($priceBookId, $name, $customerGroupId, $id, $validFrom, $validTo, $restrictToPlatformKey, $outletId, $restrictToPlatformLabel, $customerGroup, $version, $deletedAt, $createdAt, $updatedAt, $outlet, $accept));
	}


	/**
	 * @param string $priceBookId
	 * @param string $accept
	 */
	public function deletePriceBook(string $priceBookId, ?string $accept = null): Response
	{
		return $this->connector->send(new DeletePriceBook($priceBookId, $accept));
	}


	/**
	 * @param string $priceBookId
	 * @param string $accept
	 */
	public function listPriceBookProductsPerPriceBook(string $priceBookId, ?string $accept = null): Response
	{
		return $this->connector->send(new ListPriceBookProductsPerPriceBook($priceBookId, $accept));
	}


	/**
	 * @param string $priceBookId
	 * @param mixed $data
	 * @param mixed $version
	 * @param string $accept
	 */
	public function addTheProductsToPriceBook(
		string $priceBookId,
		mixed $data = null,
		mixed $version = null,
		?string $accept = null,
	): Response
	{
		return $this->connector->send(new AddTheProductsToPriceBook($priceBookId, $data, $version, $accept));
	}


	/**
	 * @param string $priceBookId
	 * @param mixed $data
	 * @param string $accept
	 */
	public function deleteSomeEntriesFromPriceBook(
		string $priceBookId,
		mixed $data = null,
		?string $accept = null,
	): Response
	{
		return $this->connector->send(new DeleteSomeEntriesFromPriceBook($priceBookId, $data, $accept));
	}


	/**
	 * @param string $priceBookId
	 * @param mixed $data
	 * @param mixed $version
	 * @param string $accept
	 */
	public function updateTheProductsToPriceBook(
		string $priceBookId,
		mixed $data = null,
		mixed $version = null,
		?string $accept = null,
	): Response
	{
		return $this->connector->send(new UpdateTheProductsToPriceBook($priceBookId, $data, $version, $accept));
	}


	/**
	 * @param string $priceBookId
	 * @param mixed $data
	 * @param mixed $version
	 * @param string $contentType
	 * @param string $accept
	 */
	public function updateTheProductsInPriceBook(
		string $priceBookId,
		mixed $data = null,
		mixed $version = null,
		?string $contentType = null,
		?string $accept = null,
	): Response
	{
		return $this->connector->send(new UpdateTheProductsInPriceBook($priceBookId, $data, $version, $contentType, $accept));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param string $after (int64) The lower limit for the version numbers to be included in the response.
	 * @param string $before (int64) The upper limit for the version numbers to be included in the response.
	 * @param string $pageSize (integer) The maximum number of items to be returned in the response.
	 * @param string $order (string) Field used to sort the results.
	 * @param string $direction (string) Sort results direction. ASC or DESC.
	 * @param string $deleted (boolean) Include (true) or exclude (false) deleted price books. Default value is false.
	 * @param string $customerGroupId (stgring) Filter the list and show only price books linked to the specified Customer Group.
	 * @param string $accept
	 */
	public function listPriceBooksDuplicate1(
		?string $after = null,
		?string $before = null,
		?string $pageSize = null,
		?string $order = null,
		?string $direction = null,
		?string $deleted = null,
		?string $customerGroupId = null,
		?string $accept = null,
	): Response
	{
		return $this->connector->send(new ListPriceBooks($after, $before, $pageSize, $order, $direction, $deleted, $customerGroupId, $accept));
	}


	/**
	 * @param mixed $customerGroupIds
	 * @param mixed $outletIds
	 * @param mixed $name
	 * @param mixed $validFrom
	 * @param mixed $validTo
	 * @param mixed $restrictToPlatform
	 * @param string $contentType
	 * @param string $accept
	 */
	public function createSinglePriceBook(
		mixed $customerGroupIds = null,
		mixed $outletIds = null,
		mixed $name = null,
		mixed $validFrom = null,
		mixed $validTo = null,
		mixed $restrictToPlatform = null,
		?string $contentType = null,
		?string $accept = null,
	): Response
	{
		return $this->connector->send(new CreateSinglePriceBook($customerGroupIds, $outletIds, $name, $validFrom, $validTo, $restrictToPlatform, $contentType, $accept));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param string $id
	 * @param string $accept
	 */
	public function getSinglePriceBookDuplicate2(string $id, ?string $accept = null): Response
	{
		return $this->connector->send(new GetSinglePriceBook($id, $accept));
	}


	/**
	 * @param string $id
	 * @param mixed $customerGroupIds
	 * @param mixed $outletIds
	 * @param mixed $name
	 * @param mixed $validFrom
	 * @param mixed $validTo
	 * @param mixed $restrictToPlatform
	 * @param string $contentType
	 * @param string $accept
	 */
	public function updateSinglePriceBook(
		string $id,
		mixed $customerGroupIds = null,
		mixed $outletIds = null,
		mixed $name = null,
		mixed $validFrom = null,
		mixed $validTo = null,
		mixed $restrictToPlatform = null,
		?string $contentType = null,
		?string $accept = null,
	): Response
	{
		return $this->connector->send(new UpdateSinglePriceBook($id, $customerGroupIds, $outletIds, $name, $validFrom, $validTo, $restrictToPlatform, $contentType, $accept));
	}
}
