<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\Search\SearchForResources;
use LightSpeed\XSeries\Resource;
use Saloon\Contracts\Response;

class Search extends Resource
{
	/**
	 * @param string $type (Required) (string) The entity type to search for.
	 * @param string $orderDirection (string) Sorting direction.
	 * @param string $pageSize (integer) The maximum number of objects to be included in the response, currently limited to 1000. Specifying more than 1000 will result in 1000 objects being returned.
	 * @param string $offset (integer) The number of objects to be "skipped" for the response. Used for pagination.
	 * @param string $id (string) The id of the object to be included in the response.
	 * @param string $id (string) The id of the object to be excluded from the response.
	 * @param string $deleted (boolean) Indicated whether deleted objects should be included in the response.
	 * @param string $status (string) SALES Status of the sale to find. Can be used multiple times to search for objects with different values of this parameter.
	 * @param string $invoiceNumber (string) SALES Invoice number of the sale.
	 * @param string $customerId (string) SALES The ID of the customer associated with the sales.
	 * @param string $userId (string) SALES The ID of the user associated with the sales.
	 * @param string $outletId (string) SALES The ID of the outlet associated with the sales.
	 * @param string $dateFrom (string) SALES Lower limit for the sale date as UTC timestamp. Format: 2016-08-08T12:00:00Z.
	 * @param string $dateTo (string) SALES Upper limit for the sale date as UTC timestamp. Format: 2016-08-08T12:00:00Z.
	 * @param string $sku (string) PRODUCTS The SKU of products to include in the search.Can be used multiple times to search for objects with different values of this parameter.
	 * @param string $sku (string) PRODUCTS The SKU of products to exclude from the search. Can be used multiple times to search for objects with different values of this parameter.
	 * @param string $supplierId (string) PRODUCTS The ID of the supplier associated with the product to include in the search. Can be used multiple times to search for objects with different values of this parameter.
	 * @param string $supplierId (string) PRODUCTS The ID of the supplier associated with the product to exclude from the search. Can be used multiple times to search for objects with different values of this parameter.
	 * @param string $brandId (string) PRODUCTS The ID of the brand associated with the product to include in the search. Can be used multiple times to search for objects with different values of this parameter.
	 * @param string $brandId (string) PRODUCTS The ID of the brand associated with the product to exclude from the search. Can be used multiple times to search for objects with different values of this parameter.
	 * @param string $tagId (string) PRODUCTS The ID of the tag associated with the product to include in the search. Can be used multiple times to search for objects with different values of this parameter.
	 * @param string $tagId (string) PRODUCTS The ID of the brand associated with the product to exclude from the search. Can be used multiple times to search for objects with different values of this parameter.
	 * @param string $productTypeId (string) PRODUCTS The ID of the product type associated with the product to include in the search. Can be used multiple times to search for objects with different values of this parameter.
	 * @param string $productTypeId (string) PRODUCTS The ID of the product type associated with the product to exclude from the search. Can be used multiple times to search for objects with different values of this parameter.
	 * @param string $variantParentId (string) PRODUCTS The ID of the variant parent product associated with the product to include in the search. Can be used multiple times to search for objects with different values of this parameter.
	 * @param string $variantParentId (string) PRODUCTS The ID of the variant parent product associated with the product to exclude from the search. Can be used multiple times to search for objects with different values of this parameter.
	 * @param string $customerCode (string) CUSTOMERS The customer_code associated with the customer to find.
	 * @param string $email (string) CUSTOMERS The email address associated with the customer to find.
	 * @param string $firstName (string) CUSTOMERS The first_name for the customers to find.
	 * @param string $lastName (string) CUSTOMERS The last_name for the customers to find.
	 * @param string $companyName (string) CUSTOMERS The company_name for the customers to find.
	 * @param string $mobile (string) CUSTOMERS The mobile number for the customers to find.
	 * @param string $phone (string) CUSTOMERS The phone number for the customers to find.
	 */
	public function searchForResources(
		?string $type,
		?string $orderDirection,
		?string $pageSize,
		?string $offset,
		?string $id,
		?string $deleted,
		?string $status,
		?string $invoiceNumber,
		?string $customerId,
		?string $userId,
		?string $outletId,
		?string $dateFrom,
		?string $dateTo,
		?string $sku,
		?string $supplierId,
		?string $brandId,
		?string $tagId,
		?string $productTypeId,
		?string $variantParentId,
		?string $customerCode,
		?string $email,
		?string $firstName,
		?string $lastName,
		?string $companyName,
		?string $mobile,
		?string $phone,
	): Response
	{
		return $this->connector->send(new SearchForResources($type, $orderDirection, $pageSize, $offset, $id, $id, $deleted, $status, $invoiceNumber, $customerId, $userId, $outletId, $dateFrom, $dateTo, $sku, $sku, $supplierId, $supplierId, $brandId, $brandId, $tagId, $tagId, $productTypeId, $productTypeId, $variantParentId, $variantParentId, $customerCode, $email, $firstName, $lastName, $companyName, $mobile, $phone));
	}
}
