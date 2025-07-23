<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\Products\CreateProduct;
use LightSpeed\XSeries\Requests\Products\DeleteProduct;
use LightSpeed\XSeries\Requests\Products\DeleteProductFamily;
use LightSpeed\XSeries\Requests\Products\GetInventoryByProductId;
use LightSpeed\XSeries\Requests\Products\GetPriceBooksForProduct;
use LightSpeed\XSeries\Requests\Products\GetProductById;
use LightSpeed\XSeries\Requests\Products\ListProducts;
use LightSpeed\XSeries\Requests\Products\UploadImage;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Products extends BaseResource
{
	/**
	 * @param int $after The lower limit for the version numbers to be included in the response.
	 * @param int $before The upper limit for the version numbers to be included in the response.
	 * @param bool $deleted Indicates whether deleted items should be included in the response.
	 * @param int $pageSize The maximum number of items to be returned in the response.
	 * @param string $sku Allows loading a product by one of its SKUs. Note that all other query params are ignored if this is provided.
	 * @param string $name Allows loading products with the name provided in this parameter. This query typically retrieves all products from the product family with the provided name. Note that all other query parameters are ignored if this is provided.
	 * @param string $familyName Alias for 'name'. Allows loading products that belong to the family with the name provided in this parameter. Note that all other query parameters are ignored if this is provided.
	 */
	public function listProducts(
		?int $after = null,
		?int $before = null,
		?bool $deleted = null,
		?int $pageSize = null,
		?string $sku = null,
		?string $name = null,
		?string $familyName = null,
	): Response
	{
		return $this->connector->send(new ListProducts($after, $before, $deleted, $pageSize, $sku, $name, $familyName));
	}


	public function createProduct(): Response
	{
		return $this->connector->send(new CreateProduct());
	}


	/**
	 * @param string $productId The product id
	 */
	public function getProductById(string $productId): Response
	{
		return $this->connector->send(new GetProductById($productId));
	}


	/**
	 * @param string $productId The product id
	 */
	public function deleteProduct(string $productId): Response
	{
		return $this->connector->send(new DeleteProduct($productId));
	}


	/**
	 * @param string $productId The product id of a family member
	 */
	public function deleteProductFamily(string $productId): Response
	{
		return $this->connector->send(new DeleteProductFamily($productId));
	}


	/**
	 * @param string $productId The product id
	 */
	public function uploadImage(string $productId): Response
	{
		return $this->connector->send(new UploadImage($productId));
	}


	/**
	 * @param string $productId The product id
	 * @param int $after The lower limit for the version numbers to be included in the response.
	 * @param int $before The upper limit for the version numbers to be included in the response.
	 * @param int $pageSize The maximum number of items to be returned in the response.
	 */
	public function getInventoryByProductId(
		string $productId,
		?int $after = null,
		?int $before = null,
		?int $pageSize = null,
	): Response
	{
		return $this->connector->send(new GetInventoryByProductId($productId, $after, $before, $pageSize));
	}


	/**
	 * @param string $productId The product id to find in the Price Books
	 */
	public function getPriceBooksForProduct(string $productId): Response
	{
		return $this->connector->send(new GetPriceBooksForProduct($productId));
	}
}
