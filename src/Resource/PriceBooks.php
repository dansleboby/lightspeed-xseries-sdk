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
use LightSpeed\XSeries\Resource;
use Saloon\Contracts\Response;

class PriceBooks extends Resource
{
	/**
	 * @param string $before (int64) The upper limit for the version numbers to be included in the response.
	 * @param string $pageSize (integer) The maximum number of items to be returned in the response.
	 */
	public function listPriceBookProducts(?string $before, ?string $pageSize): Response
	{
		return $this->connector->send(new ListPriceBookProducts($before, $pageSize));
	}


	/**
	 * @param string $before (int64) The upper limit for the version numbers to be included in the response.
	 * @param string $pageSize (integer) The maximum number of items to be returned in the response.
	 */
	public function listPriceBooks(?string $before, ?string $pageSize): Response
	{
		return $this->connector->send(new ListPriceBooks($before, $pageSize));
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
	 */
	public function createPriceBook(
		mixed $name,
		mixed $customerGroupId,
		mixed $id,
		mixed $validFrom,
		mixed $validTo,
		mixed $restrictToPlatformKey,
		mixed $outletId,
		mixed $restrictToPlatformLabel,
		mixed $customerGroup,
		mixed $version,
		mixed $deletedAt,
		mixed $createdAt,
		mixed $updatedAt,
		mixed $outlet,
	): Response
	{
		return $this->connector->send(new CreatePriceBook($name, $customerGroupId, $id, $validFrom, $validTo, $restrictToPlatformKey, $outletId, $restrictToPlatformLabel, $customerGroup, $version, $deletedAt, $createdAt, $updatedAt, $outlet));
	}


	/**
	 * @param string $priceBookId
	 */
	public function getSinglePriceBook(string $priceBookId): Response
	{
		return $this->connector->send(new GetSinglePriceBook($priceBookId));
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
	 */
	public function updatePriceBook(
		string $priceBookId,
		mixed $name,
		mixed $customerGroupId,
		mixed $id,
		mixed $validFrom,
		mixed $validTo,
		mixed $restrictToPlatformKey,
		mixed $outletId,
		mixed $restrictToPlatformLabel,
		mixed $customerGroup,
		mixed $version,
		mixed $deletedAt,
		mixed $createdAt,
		mixed $updatedAt,
		mixed $outlet,
	): Response
	{
		return $this->connector->send(new UpdatePriceBook($priceBookId, $name, $customerGroupId, $id, $validFrom, $validTo, $restrictToPlatformKey, $outletId, $restrictToPlatformLabel, $customerGroup, $version, $deletedAt, $createdAt, $updatedAt, $outlet));
	}


	/**
	 * @param string $priceBookId
	 */
	public function deletePriceBook(string $priceBookId): Response
	{
		return $this->connector->send(new DeletePriceBook($priceBookId));
	}


	/**
	 * @param string $priceBookId
	 */
	public function listPriceBookProductsPerPriceBook(string $priceBookId): Response
	{
		return $this->connector->send(new ListPriceBookProductsPerPriceBook($priceBookId));
	}


	/**
	 * @param string $priceBookId
	 * @param mixed $data
	 * @param mixed $version
	 */
	public function addTheProductsToPriceBook(string $priceBookId, mixed $data, mixed $version): Response
	{
		return $this->connector->send(new AddTheProductsToPriceBook($priceBookId, $data, $version));
	}


	/**
	 * @param string $priceBookId
	 * @param mixed $data
	 */
	public function deleteSomeEntriesFromPriceBook(string $priceBookId, mixed $data): Response
	{
		return $this->connector->send(new DeleteSomeEntriesFromPriceBook($priceBookId, $data));
	}


	/**
	 * @param string $priceBookId
	 * @param mixed $data
	 * @param mixed $version
	 */
	public function updateTheProductsToPriceBook(string $priceBookId, mixed $data, mixed $version): Response
	{
		return $this->connector->send(new UpdateTheProductsToPriceBook($priceBookId, $data, $version));
	}


	/**
	 * @param string $priceBookId
	 * @param mixed $data
	 * @param mixed $version
	 */
	public function updateTheProductsInPriceBook(string $priceBookId, mixed $data, mixed $version): Response
	{
		return $this->connector->send(new UpdateTheProductsInPriceBook($priceBookId, $data, $version));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param string $before (int64) The upper limit for the version numbers to be included in the response.
	 * @param string $pageSize (integer) The maximum number of items to be returned in the response.
	 * @param string $order (string) Field used to sort the results.
	 * @param string $direction (string) Sort results direction. ASC or DESC.
	 * @param string $deleted (boolean) Include (true) or exclude (false) deleted price books. Default value is false.
	 * @param string $customerGroupId (stgring) Filter the list and show only price books linked to the specified Customer Group.
	 */
	public function listPriceBooksDuplicate1(
		?string $before,
		?string $pageSize,
		?string $order,
		?string $direction,
		?string $deleted,
		?string $customerGroupId,
	): Response
	{
		return $this->connector->send(new ListPriceBooks($before, $pageSize, $order, $direction, $deleted, $customerGroupId));
	}


	/**
	 * @param mixed $customerGroupIds
	 * @param mixed $outletIds
	 * @param mixed $name
	 * @param mixed $validFrom
	 * @param mixed $validTo
	 * @param mixed $restrictToPlatform
	 */
	public function createSinglePriceBook(
		mixed $customerGroupIds,
		mixed $outletIds,
		mixed $name,
		mixed $validFrom,
		mixed $validTo,
		mixed $restrictToPlatform,
	): Response
	{
		return $this->connector->send(new CreateSinglePriceBook($customerGroupIds, $outletIds, $name, $validFrom, $validTo, $restrictToPlatform));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param string $id
	 */
	public function getSinglePriceBookDuplicate2(string $id): Response
	{
		return $this->connector->send(new GetSinglePriceBook($id));
	}


	/**
	 * @param string $id
	 * @param mixed $customerGroupIds
	 * @param mixed $outletIds
	 * @param mixed $name
	 * @param mixed $validFrom
	 * @param mixed $validTo
	 * @param mixed $restrictToPlatform
	 */
	public function updateSinglePriceBook(
		string $id,
		mixed $customerGroupIds,
		mixed $outletIds,
		mixed $name,
		mixed $validFrom,
		mixed $validTo,
		mixed $restrictToPlatform,
	): Response
	{
		return $this->connector->send(new UpdateSinglePriceBook($id, $customerGroupIds, $outletIds, $name, $validFrom, $validTo, $restrictToPlatform));
	}
}
