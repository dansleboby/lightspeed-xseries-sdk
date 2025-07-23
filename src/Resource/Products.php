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
use LightSpeed\XSeries\Resource;
use Saloon\Contracts\Response;

class Products extends Resource
{
	/**
	 * @param string $before (int64) The upper limit for the version numbers to be included in the response.
	 * @param string $pageSize (integer) The maximum number of items to be returned in the response.
	 * @param string $deleted (bool) Whether to include deleted resources.
	 */
	public function listProducts(?string $before, ?string $pageSize, ?string $deleted): Response
	{
		return $this->connector->send(new ListProducts($before, $pageSize, $deleted));
	}


	public function createOrUpdateProduct09(): Response
	{
		return $this->connector->send(new CreateOrUpdateProduct09());
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
	 * @param string $before
	 * @param string $pageSize
	 * @param string $deleted
	 */
	public function createProduct(
		mixed $sourceId,
		mixed $sourceVariantId,
		mixed $variantParentId,
		mixed $name,
		mixed $variantName,
		mixed $handle,
		mixed $sku,
		mixed $supplierCode,
		mixed $active,
		mixed $hasInventory,
		mixed $isComposite,
		mixed $description,
		mixed $imageUrl,
		mixed $createdAt,
		mixed $updatedAt,
		mixed $deletedAt,
		mixed $source,
		mixed $accountCode,
		mixed $accountCodePurchase,
		mixed $supplyPrice,
		mixed $version,
		mixed $type,
		mixed $supplier,
		mixed $brand,
		mixed $variantOptions,
		mixed $categories,
		mixed $images,
		mixed $hasVariants,
		mixed $variantCount,
		mixed $buttonOrder,
		mixed $priceExcludingTax,
		mixed $loyaltyAmount,
		mixed $attributes,
		mixed $supplierId,
		mixed $productTypeId,
		mixed $brandId,
		mixed $imageThumbnailUrl,
		mixed $isActive,
		mixed $tagIds,
		?string $before,
		?string $pageSize,
		?string $deleted,
	): Response
	{
		return $this->connector->send(new CreateProduct($sourceId, $sourceVariantId, $variantParentId, $name, $variantName, $handle, $sku, $supplierCode, $active, $hasInventory, $isComposite, $description, $imageUrl, $createdAt, $updatedAt, $deletedAt, $source, $accountCode, $accountCodePurchase, $supplyPrice, $version, $type, $supplier, $brand, $variantOptions, $categories, $images, $hasVariants, $variantCount, $buttonOrder, $priceExcludingTax, $loyaltyAmount, $attributes, $supplierId, $productTypeId, $brandId, $imageThumbnailUrl, $isActive, $tagIds, $before, $pageSize, $deleted));
	}


	/**
	 * @param string $productId
	 */
	public function getSingleProduct(string $productId): Response
	{
		return $this->connector->send(new GetSingleProduct($productId));
	}


	/**
	 * @param string $productId
	 * @param mixed $image
	 */
	public function uploadImage(string $productId, mixed $image): Response
	{
		return $this->connector->send(new UploadImage($productId, $image));
	}


	/**
	 * @param string $productId
	 * @param string $before (int64) The upper limit for the version numbers to be included in the response.
	 * @param string $pageSize (integer) The maximum number of items to be returned in the response.
	 */
	public function getInventoryDataForSingleProduct(string $productId, ?string $before, ?string $pageSize): Response
	{
		return $this->connector->send(new GetInventoryDataForSingleProduct($productId, $before, $pageSize));
	}


	/**
	 * @param string $productId
	 */
	public function getListOfPriceBooksTheSpecifiedProductIsIn(string $productId): Response
	{
		return $this->connector->send(new GetListOfPriceBooksTheSpecifiedProductIsIn($productId));
	}


	/**
	 * @param string $productId
	 * @param mixed $common
	 * @param mixed $details
	 */
	public function updateProduct(string $productId, mixed $common, mixed $details): Response
	{
		return $this->connector->send(new UpdateProduct($productId, $common, $details));
	}


	/**
	 * @param mixed $common
	 * @param mixed $details
	 */
	public function createSingleVariant(mixed $common, mixed $details): Response
	{
		return $this->connector->send(new CreateSingleVariant($common, $details));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param string $sinceVersion (integer) Only show the products with version number greater than the value of since_version.
	 * @param string $pageSize (integer) The number of products to show per page.
	 * @param string $includeDeleted (boolean) Whether to include deleted products or not.
	 */
	public function listProductsDuplicate1(?string $sinceVersion, ?string $pageSize, ?string $includeDeleted): Response
	{
		return $this->connector->send(new ListProducts($sinceVersion, $pageSize, $includeDeleted));
	}


	/**
	 * @param string $id
	 */
	public function getProduct(string $id): Response
	{
		return $this->connector->send(new GetProduct($id));
	}
}
