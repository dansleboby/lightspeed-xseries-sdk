<?php

namespace LightSpeed\XSeries\Requests\Search;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Search for resources
 */
class SearchForResources extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/search";
	}


	/**
	 * @param null|string $type (Required) (string) The entity type to search for.
	 * @param null|string $orderDirection (string) Sorting direction.
	 * @param null|string $pageSize (integer) The maximum number of objects to be included in the response, currently limited to 1000. Specifying more than 1000 will result in 1000 objects being returned.
	 * @param null|string $offset (integer) The number of objects to be "skipped" for the response. Used for pagination.
	 * @param null|string $id (string) The id of the object to be included in the response.
	 * @param null|string $id (string) The id of the object to be excluded from the response.
	 * @param null|string $deleted (boolean) Indicated whether deleted objects should be included in the response.
	 * @param null|string $status (string) SALES Status of the sale to find. Can be used multiple times to search for objects with different values of this parameter.
	 * @param null|string $invoiceNumber (string) SALES Invoice number of the sale.
	 * @param null|string $customerId (string) SALES The ID of the customer associated with the sales.
	 * @param null|string $userId (string) SALES The ID of the user associated with the sales.
	 * @param null|string $outletId (string) SALES The ID of the outlet associated with the sales.
	 * @param null|string $dateFrom (string) SALES Lower limit for the sale date as UTC timestamp. Format: 2016-08-08T12:00:00Z.
	 * @param null|string $dateTo (string) SALES Upper limit for the sale date as UTC timestamp. Format: 2016-08-08T12:00:00Z.
	 * @param null|string $sku (string) PRODUCTS The SKU of products to include in the search.Can be used multiple times to search for objects with different values of this parameter.
	 * @param null|string $sku (string) PRODUCTS The SKU of products to exclude from the search. Can be used multiple times to search for objects with different values of this parameter.
	 * @param null|string $supplierId (string) PRODUCTS The ID of the supplier associated with the product to include in the search. Can be used multiple times to search for objects with different values of this parameter.
	 * @param null|string $supplierId (string) PRODUCTS The ID of the supplier associated with the product to exclude from the search. Can be used multiple times to search for objects with different values of this parameter.
	 * @param null|string $brandId (string) PRODUCTS The ID of the brand associated with the product to include in the search. Can be used multiple times to search for objects with different values of this parameter.
	 * @param null|string $brandId (string) PRODUCTS The ID of the brand associated with the product to exclude from the search. Can be used multiple times to search for objects with different values of this parameter.
	 * @param null|string $tagId (string) PRODUCTS The ID of the tag associated with the product to include in the search. Can be used multiple times to search for objects with different values of this parameter.
	 * @param null|string $tagId (string) PRODUCTS The ID of the brand associated with the product to exclude from the search. Can be used multiple times to search for objects with different values of this parameter.
	 * @param null|string $productTypeId (string) PRODUCTS The ID of the product type associated with the product to include in the search. Can be used multiple times to search for objects with different values of this parameter.
	 * @param null|string $productTypeId (string) PRODUCTS The ID of the product type associated with the product to exclude from the search. Can be used multiple times to search for objects with different values of this parameter.
	 * @param null|string $variantParentId (string) PRODUCTS The ID of the variant parent product associated with the product to include in the search. Can be used multiple times to search for objects with different values of this parameter.
	 * @param null|string $variantParentId (string) PRODUCTS The ID of the variant parent product associated with the product to exclude from the search. Can be used multiple times to search for objects with different values of this parameter.
	 * @param null|string $customerCode (string) CUSTOMERS The customer_code associated with the customer to find.
	 * @param null|string $email (string) CUSTOMERS The email address associated with the customer to find.
	 * @param null|string $firstName (string) CUSTOMERS The first_name for the customers to find.
	 * @param null|string $lastName (string) CUSTOMERS The last_name for the customers to find.
	 * @param null|string $companyName (string) CUSTOMERS The company_name for the customers to find.
	 * @param null|string $mobile (string) CUSTOMERS The mobile number for the customers to find.
	 * @param null|string $phone (string) CUSTOMERS The phone number for the customers to find.
	 */
	public function __construct(
		protected ?string $type = null,
		protected ?string $orderDirection = null,
		protected ?string $pageSize = null,
		protected ?string $offset = null,
		protected ?string $id = null,
		protected ?string $deleted = null,
		protected ?string $status = null,
		protected ?string $invoiceNumber = null,
		protected ?string $customerId = null,
		protected ?string $userId = null,
		protected ?string $outletId = null,
		protected ?string $dateFrom = null,
		protected ?string $dateTo = null,
		protected ?string $sku = null,
		protected ?string $supplierId = null,
		protected ?string $brandId = null,
		protected ?string $tagId = null,
		protected ?string $productTypeId = null,
		protected ?string $variantParentId = null,
		protected ?string $customerCode = null,
		protected ?string $email = null,
		protected ?string $firstName = null,
		protected ?string $lastName = null,
		protected ?string $companyName = null,
		protected ?string $mobile = null,
		protected ?string $phone = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'type' => $this->type,
			'order_direction' => $this->orderDirection,
			'page_size' => $this->pageSize,
			'offset' => $this->offset,
			'_id' => $this->id,
			'-_id' => $this->id,
			'deleted' => $this->deleted,
			'status' => $this->status,
			'invoice_number' => $this->invoiceNumber,
			'customer_id' => $this->customerId,
			'user_id' => $this->userId,
			'outlet_id' => $this->outletId,
			'date_from' => $this->dateFrom,
			'date_to' => $this->dateTo,
			'sku' => $this->sku,
			'-sku' => $this->sku,
			'supplier_id' => $this->supplierId,
			'-supplier_id' => $this->supplierId,
			'brand_id' => $this->brandId,
			'-brand_id' => $this->brandId,
			'tag_id' => $this->tagId,
			'-tag_id' => $this->tagId,
			'product_type_id' => $this->productTypeId,
			'-product_type_id' => $this->productTypeId,
			'variant_parent_id' => $this->variantParentId,
			'-variant_parent_id' => $this->variantParentId,
			'customer_code' => $this->customerCode,
			'email' => $this->email,
			'first_name' => $this->firstName,
			'last_name' => $this->lastName,
			'company_name' => $this->companyName,
			'mobile' => $this->mobile,
			'phone' => $this->phone,
		]);
	}
}
