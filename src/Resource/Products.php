<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\Products\CreateOrUpdateProduct09;
use LightSpeed\XSeries\Requests\Products\CreateProduct;
use LightSpeed\XSeries\Requests\Products\CreateSingleVariant;
use LightSpeed\XSeries\Requests\Products\GetInventoryDataForSingleProduct;
use LightSpeed\XSeries\Requests\Products\GetListOfPriceBooksTheSpecifiedProductIsIn;
use LightSpeed\XSeries\Requests\Products\GetProduct;
use LightSpeed\XSeries\Requests\Products\GetSingleProduct;
use LightSpeed\XSeries\Requests\Products\ListProducts;
use LightSpeed\XSeries\Requests\Products\UpdateProduct;
use LightSpeed\XSeries\Requests\Products\UploadImage;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Products extends BaseResource
{
	/**
	 * @param string $after (int64) The lower limit for the version numbers to be included in the response.
	 * @param string $before (int64) The upper limit for the version numbers to be included in the response.
	 * @param string $pageSize (integer) The maximum number of items to be returned in the response.
	 * @param string $deleted (bool) Whether to include deleted resources.
	 * @param string $accept
	 */
	public function listProducts(
		?string $after = null,
		?string $before = null,
		?string $pageSize = null,
		?string $deleted = null,
		?string $accept = null,
	): Response
	{
		return $this->connector->send(new ListProducts($after, $before, $pageSize, $deleted, $accept));
	}


	/**
	 * @param string $accept
	 * @param string $contentType
	 */
	public function createOrUpdateProduct09(?string $accept = null, ?string $contentType = null): Response
	{
		return $this->connector->send(new CreateOrUpdateProduct09($accept, $contentType));
	}


	/**
	 * @param mixed $sourceId
	 * @param mixed $sourceVariantId
	 * @param mixed $variantParentId
	 * @param mixed $name
	 * @param mixed $variantName
	 * @param mixed $handle
	 * @param mixed $sku
	 * @param mixed $supplierCode
	 * @param mixed $active
	 * @param mixed $hasInventory
	 * @param mixed $isComposite
	 * @param mixed $description
	 * @param mixed $imageUrl
	 * @param mixed $createdAt
	 * @param mixed $updatedAt
	 * @param mixed $deletedAt
	 * @param mixed $source
	 * @param mixed $accountCode
	 * @param mixed $accountCodePurchase
	 * @param mixed $supplyPrice
	 * @param mixed $version
	 * @param mixed $type
	 * @param mixed $supplier
	 * @param mixed $brand
	 * @param mixed $variantOptions
	 * @param mixed $categories
	 * @param mixed $images
	 * @param mixed $hasVariants
	 * @param mixed $variantCount
	 * @param mixed $buttonOrder
	 * @param mixed $priceExcludingTax
	 * @param mixed $loyaltyAmount
	 * @param mixed $attributes
	 * @param mixed $supplierId
	 * @param mixed $productTypeId
	 * @param mixed $brandId
	 * @param mixed $imageThumbnailUrl
	 * @param mixed $isActive
	 * @param mixed $tagIds
	 * @param string $after
	 * @param string $before
	 * @param string $pageSize
	 * @param string $deleted
	 * @param string $accept
	 */
	public function createProduct(
		mixed $sourceId = null,
		mixed $sourceVariantId = null,
		mixed $variantParentId = null,
		mixed $name = null,
		mixed $variantName = null,
		mixed $handle = null,
		mixed $sku = null,
		mixed $supplierCode = null,
		mixed $active = null,
		mixed $hasInventory = null,
		mixed $isComposite = null,
		mixed $description = null,
		mixed $imageUrl = null,
		mixed $createdAt = null,
		mixed $updatedAt = null,
		mixed $deletedAt = null,
		mixed $source = null,
		mixed $accountCode = null,
		mixed $accountCodePurchase = null,
		mixed $supplyPrice = null,
		mixed $version = null,
		mixed $type = null,
		mixed $supplier = null,
		mixed $brand = null,
		mixed $variantOptions = null,
		mixed $categories = null,
		mixed $images = null,
		mixed $hasVariants = null,
		mixed $variantCount = null,
		mixed $buttonOrder = null,
		mixed $priceExcludingTax = null,
		mixed $loyaltyAmount = null,
		mixed $attributes = null,
		mixed $supplierId = null,
		mixed $productTypeId = null,
		mixed $brandId = null,
		mixed $imageThumbnailUrl = null,
		mixed $isActive = null,
		mixed $tagIds = null,
		?string $after = null,
		?string $before = null,
		?string $pageSize = null,
		?string $deleted = null,
		?string $accept = null,
	): Response
	{
		return $this->connector->send(new CreateProduct($sourceId, $sourceVariantId, $variantParentId, $name, $variantName, $handle, $sku, $supplierCode, $active, $hasInventory, $isComposite, $description, $imageUrl, $createdAt, $updatedAt, $deletedAt, $source, $accountCode, $accountCodePurchase, $supplyPrice, $version, $type, $supplier, $brand, $variantOptions, $categories, $images, $hasVariants, $variantCount, $buttonOrder, $priceExcludingTax, $loyaltyAmount, $attributes, $supplierId, $productTypeId, $brandId, $imageThumbnailUrl, $isActive, $tagIds, $after, $before, $pageSize, $deleted, $accept));
	}


	/**
	 * @param string $productId
	 * @param string $accept
	 */
	public function getSingleProduct(string $productId, ?string $accept = null): Response
	{
		return $this->connector->send(new GetSingleProduct($productId, $accept));
	}


	/**
	 * @param string $productId
	 * @param mixed $image
	 * @param string $accept
	 * @param string $contentType
	 */
	public function uploadImage(
		string $productId,
		mixed $image = null,
		?string $accept = null,
		?string $contentType = null,
	): Response
	{
		return $this->connector->send(new UploadImage($productId, $image, $accept, $contentType));
	}


	/**
	 * @param string $productId
	 * @param string $after (int64) The lower limit for the version numbers to be included in the response.
	 * @param string $before (int64) The upper limit for the version numbers to be included in the response.
	 * @param string $pageSize (integer) The maximum number of items to be returned in the response.
	 * @param string $accept
	 */
	public function getInventoryDataForSingleProduct(
		string $productId,
		?string $after = null,
		?string $before = null,
		?string $pageSize = null,
		?string $accept = null,
	): Response
	{
		return $this->connector->send(new GetInventoryDataForSingleProduct($productId, $after, $before, $pageSize, $accept));
	}


	/**
	 * @param string $productId
	 * @param string $accept
	 */
	public function getListOfPriceBooksTheSpecifiedProductIsIn(string $productId, ?string $accept = null): Response
	{
		return $this->connector->send(new GetListOfPriceBooksTheSpecifiedProductIsIn($productId, $accept));
	}


	/**
	 * @param string $productId
	 * @param mixed $common
	 * @param mixed $details
	 * @param string $contentType
	 * @param string $accept
	 */
	public function updateProduct(
		string $productId,
		mixed $common = null,
		mixed $details = null,
		?string $contentType = null,
		?string $accept = null,
	): Response
	{
		return $this->connector->send(new UpdateProduct($productId, $common, $details, $contentType, $accept));
	}


	/**
	 * @param mixed $common
	 * @param mixed $details
	 * @param string $contentType
	 * @param string $accept
	 */
	public function createSingleVariant(
		mixed $common = null,
		mixed $details = null,
		?string $contentType = null,
		?string $accept = null,
	): Response
	{
		return $this->connector->send(new CreateSingleVariant($common, $details, $contentType, $accept));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param string $sinceVersion (integer) Only show the products with version number greater than the value of since_version.
	 * @param string $pageSize (integer) The number of products to show per page.
	 * @param string $includeDeleted (boolean) Whether to include deleted products or not.
	 * @param string $accept
	 */
	public function listProductsDuplicate1(
		?string $sinceVersion = null,
		?string $pageSize = null,
		?string $includeDeleted = null,
		?string $accept = null,
	): Response
	{
		return $this->connector->send(new ListProducts($sinceVersion, $pageSize, $includeDeleted, $accept));
	}


	/**
	 * @param string $id
	 * @param string $accept
	 */
	public function getProduct(string $id, ?string $accept = null): Response
	{
		return $this->connector->send(new GetProduct($id, $accept));
	}
}
