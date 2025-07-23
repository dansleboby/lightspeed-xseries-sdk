<?php

namespace LightSpeed\XSeries\Requests\Products;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create product
 */
class CreateProduct extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/products";
	}


	/**
	 * @param null|mixed $sourceId
	 * @param null|mixed $sourceVariantId
	 * @param null|mixed $variantParentId
	 * @param null|mixed $name
	 * @param null|mixed $variantName
	 * @param null|mixed $handle
	 * @param null|mixed $sku
	 * @param null|mixed $supplierCode
	 * @param null|mixed $active
	 * @param null|mixed $hasInventory
	 * @param null|mixed $isComposite
	 * @param null|mixed $description
	 * @param null|mixed $imageUrl
	 * @param null|mixed $createdAt
	 * @param null|mixed $updatedAt
	 * @param null|mixed $deletedAt
	 * @param null|mixed $source
	 * @param null|mixed $accountCode
	 * @param null|mixed $accountCodePurchase
	 * @param null|mixed $supplyPrice
	 * @param null|mixed $version
	 * @param null|mixed $type
	 * @param null|mixed $supplier
	 * @param null|mixed $brand
	 * @param null|mixed $variantOptions
	 * @param null|mixed $categories
	 * @param null|mixed $images
	 * @param null|mixed $hasVariants
	 * @param null|mixed $variantCount
	 * @param null|mixed $buttonOrder
	 * @param null|mixed $priceExcludingTax
	 * @param null|mixed $loyaltyAmount
	 * @param null|mixed $attributes
	 * @param null|mixed $supplierId
	 * @param null|mixed $productTypeId
	 * @param null|mixed $brandId
	 * @param null|mixed $imageThumbnailUrl
	 * @param null|mixed $isActive
	 * @param null|mixed $tagIds
	 * @param null|string $after
	 * @param null|string $before
	 * @param null|string $pageSize
	 * @param null|string $deleted
	 */
	public function __construct(
		protected mixed $sourceId = null,
		protected mixed $sourceVariantId = null,
		protected mixed $variantParentId = null,
		protected mixed $name = null,
		protected mixed $variantName = null,
		protected mixed $handle = null,
		protected mixed $sku = null,
		protected mixed $supplierCode = null,
		protected mixed $active = null,
		protected mixed $hasInventory = null,
		protected mixed $isComposite = null,
		protected mixed $description = null,
		protected mixed $imageUrl = null,
		protected mixed $createdAt = null,
		protected mixed $updatedAt = null,
		protected mixed $deletedAt = null,
		protected mixed $source = null,
		protected mixed $accountCode = null,
		protected mixed $accountCodePurchase = null,
		protected mixed $supplyPrice = null,
		protected mixed $version = null,
		protected mixed $type = null,
		protected mixed $supplier = null,
		protected mixed $brand = null,
		protected mixed $variantOptions = null,
		protected mixed $categories = null,
		protected mixed $images = null,
		protected mixed $hasVariants = null,
		protected mixed $variantCount = null,
		protected mixed $buttonOrder = null,
		protected mixed $priceExcludingTax = null,
		protected mixed $loyaltyAmount = null,
		protected mixed $attributes = null,
		protected mixed $supplierId = null,
		protected mixed $productTypeId = null,
		protected mixed $brandId = null,
		protected mixed $imageThumbnailUrl = null,
		protected mixed $isActive = null,
		protected mixed $tagIds = null,
		protected ?string $after = null,
		protected ?string $before = null,
		protected ?string $pageSize = null,
		protected ?string $deleted = null,
	) {
	}


	public function defaultBody(): array
	{
		return array_filter([
			'source_id' => $this->sourceId,
			'source_variant_id' => $this->sourceVariantId,
			'variant_parent_id' => $this->variantParentId,
			'name' => $this->name,
			'variant_name' => $this->variantName,
			'handle' => $this->handle,
			'sku' => $this->sku,
			'supplier_code' => $this->supplierCode,
			'active' => $this->active,
			'has_inventory' => $this->hasInventory,
			'is_composite' => $this->isComposite,
			'description' => $this->description,
			'image_url' => $this->imageUrl,
			'created_at' => $this->createdAt,
			'updated_at' => $this->updatedAt,
			'deleted_at' => $this->deletedAt,
			'source' => $this->source,
			'account_code' => $this->accountCode,
			'account_code_purchase' => $this->accountCodePurchase,
			'supply_price' => $this->supplyPrice,
			'version' => $this->version,
			'type' => $this->type,
			'supplier' => $this->supplier,
			'brand' => $this->brand,
			'variant_options' => $this->variantOptions,
			'categories' => $this->categories,
			'images' => $this->images,
			'has_variants' => $this->hasVariants,
			'variant_count' => $this->variantCount,
			'button_order' => $this->buttonOrder,
			'price_excluding_tax' => $this->priceExcludingTax,
			'loyalty_amount' => $this->loyaltyAmount,
			'attributes' => $this->attributes,
			'supplier_id' => $this->supplierId,
			'product_type_id' => $this->productTypeId,
			'brand_id' => $this->brandId,
			'image_thumbnail_url' => $this->imageThumbnailUrl,
			'is_active' => $this->isActive,
			'tag_ids' => $this->tagIds,
		]);
	}


	public function defaultQuery(): array
	{
		return array_filter(['after' => $this->after, 'before' => $this->before, 'page_size' => $this->pageSize, 'deleted' => $this->deleted]);
	}


	public function defaultHeaders(): array
	{
		return array_filter([]);
	}
}
