<?php

namespace LightSpeed\XSeries;

use LightSpeed\XSeries\Resource\Audit;
use LightSpeed\XSeries\Resource\Brands;
use LightSpeed\XSeries\Resource\ChannelRequestLog;
use LightSpeed\XSeries\Resource\ConsignmentProducts;
use LightSpeed\XSeries\Resource\Consignments;
use LightSpeed\XSeries\Resource\CustomerGroups;
use LightSpeed\XSeries\Resource\Customers;
use LightSpeed\XSeries\Resource\Fulfillment;
use LightSpeed\XSeries\Resource\Inventory;
use LightSpeed\XSeries\Resource\OutletProductTaxes;
use LightSpeed\XSeries\Resource\Outlets;
use LightSpeed\XSeries\Resource\PaymentTypes;
use LightSpeed\XSeries\Resource\PickLists;
use LightSpeed\XSeries\Resource\PriceBooks;
use LightSpeed\XSeries\Resource\ProductCategories;
use LightSpeed\XSeries\Resource\ProductImages;
use LightSpeed\XSeries\Resource\ProductTypes;
use LightSpeed\XSeries\Resource\Products;
use LightSpeed\XSeries\Resource\PromoCode;
use LightSpeed\XSeries\Resource\Promotions;
use LightSpeed\XSeries\Resource\Quotes;
use LightSpeed\XSeries\Resource\Registers;
use LightSpeed\XSeries\Resource\Retailers;
use LightSpeed\XSeries\Resource\Sales;
use LightSpeed\XSeries\Resource\Search;
use LightSpeed\XSeries\Resource\SerialNumbers;
use LightSpeed\XSeries\Resource\ServiceOrders;
use LightSpeed\XSeries\Resource\Shifts;
use LightSpeed\XSeries\Resource\Suppliers;
use LightSpeed\XSeries\Resource\Tags;
use LightSpeed\XSeries\Resource\Taxes;
use LightSpeed\XSeries\Resource\Users;
use LightSpeed\XSeries\Resource\VariantAttributes;
use Saloon\Contracts\Authenticator;
use Saloon\Http\Auth\TokenAuthenticator;
use Saloon\Http\Connector;

/**
 * API 2.0
 *
 * Early release of version 2.0 of the Lightspeed Retail (X-Series) API.
 */
class XSeriesSdk extends Connector
{
	/**
	 * @param string $domainPrefix Domain prefix of the store to be operated on
	 * @param string $bearerToken
	 */
	public function __construct(
		protected string $domainPrefix,
		protected string $bearerToken,
	) {
	}


	public function resolveBaseUrl(): string
	{
		return "https://{$this->domainPrefix}.retail.lightspeed.app/api/2.0";
	}


	public function defaultAuth(): Authenticator
	{
		return new TokenAuthenticator($this->bearerToken, "Bearer");
	}


	public function audit(): Audit
	{
		return new Audit($this);
	}


	public function brands(): Brands
	{
		return new Brands($this);
	}


	public function channelRequestLog(): ChannelRequestLog
	{
		return new ChannelRequestLog($this);
	}


	public function consignmentProducts(): ConsignmentProducts
	{
		return new ConsignmentProducts($this);
	}


	public function consignments(): Consignments
	{
		return new Consignments($this);
	}


	public function customerGroups(): CustomerGroups
	{
		return new CustomerGroups($this);
	}


	public function customers(): Customers
	{
		return new Customers($this);
	}


	public function fulfillment(): Fulfillment
	{
		return new Fulfillment($this);
	}


	public function inventory(): Inventory
	{
		return new Inventory($this);
	}


	public function outletProductTaxes(): OutletProductTaxes
	{
		return new OutletProductTaxes($this);
	}


	public function outlets(): Outlets
	{
		return new Outlets($this);
	}


	public function paymentTypes(): PaymentTypes
	{
		return new PaymentTypes($this);
	}


	public function pickLists(): PickLists
	{
		return new PickLists($this);
	}


	public function priceBooks(): PriceBooks
	{
		return new PriceBooks($this);
	}


	public function productCategories(): ProductCategories
	{
		return new ProductCategories($this);
	}


	public function productImages(): ProductImages
	{
		return new ProductImages($this);
	}


	public function productTypes(): ProductTypes
	{
		return new ProductTypes($this);
	}


	public function products(): Products
	{
		return new Products($this);
	}


	public function promoCode(): PromoCode
	{
		return new PromoCode($this);
	}


	public function promotions(): Promotions
	{
		return new Promotions($this);
	}


	public function quotes(): Quotes
	{
		return new Quotes($this);
	}


	public function registers(): Registers
	{
		return new Registers($this);
	}


	public function retailers(): Retailers
	{
		return new Retailers($this);
	}


	public function sales(): Sales
	{
		return new Sales($this);
	}


	public function search(): Search
	{
		return new Search($this);
	}


	public function serialNumbers(): SerialNumbers
	{
		return new SerialNumbers($this);
	}


	public function serviceOrders(): ServiceOrders
	{
		return new ServiceOrders($this);
	}


	public function shifts(): Shifts
	{
		return new Shifts($this);
	}


	public function suppliers(): Suppliers
	{
		return new Suppliers($this);
	}


	public function tags(): Tags
	{
		return new Tags($this);
	}


	public function taxes(): Taxes
	{
		return new Taxes($this);
	}


	public function users(): Users
	{
		return new Users($this);
	}


	public function variantAttributes(): VariantAttributes
	{
		return new VariantAttributes($this);
	}
}
