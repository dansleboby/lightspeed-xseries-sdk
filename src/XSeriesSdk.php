<?php

namespace LightSpeed\XSeries;

use LightSpeed\XSeries\Resource\Audit;
use LightSpeed\XSeries\Resource\Authorization;
use LightSpeed\XSeries\Resource\Brands;
use LightSpeed\XSeries\Resource\ChannelRequestLog;
use LightSpeed\XSeries\Resource\Consigments;
use LightSpeed\XSeries\Resource\ConsigmentsProducts;
use LightSpeed\XSeries\Resource\CustomFields;
use LightSpeed\XSeries\Resource\CustomerGroups;
use LightSpeed\XSeries\Resource\Customers;
use LightSpeed\XSeries\Resource\Fulfillment;
use LightSpeed\XSeries\Resource\GiftCards;
use LightSpeed\XSeries\Resource\Inventory;
use LightSpeed\XSeries\Resource\OutletProductTaxes;
use LightSpeed\XSeries\Resource\Outlets;
use LightSpeed\XSeries\Resource\PartnerBilling;
use LightSpeed\XSeries\Resource\PaymentTypes;
use LightSpeed\XSeries\Resource\PriceBooks;
use LightSpeed\XSeries\Resource\ProductImages;
use LightSpeed\XSeries\Resource\ProductTypes;
use LightSpeed\XSeries\Resource\Products;
use LightSpeed\XSeries\Resource\PromoCodes;
use LightSpeed\XSeries\Resource\Promotions;
use LightSpeed\XSeries\Resource\Quotes;
use LightSpeed\XSeries\Resource\Registers;
use LightSpeed\XSeries\Resource\RemoteRules;
use LightSpeed\XSeries\Resource\Retailers;
use LightSpeed\XSeries\Resource\Rules;
use LightSpeed\XSeries\Resource\Sales;
use LightSpeed\XSeries\Resource\Search;
use LightSpeed\XSeries\Resource\SerialNumbers;
use LightSpeed\XSeries\Resource\ServiceOrders;
use LightSpeed\XSeries\Resource\StoreCredits;
use LightSpeed\XSeries\Resource\Suppliers;
use LightSpeed\XSeries\Resource\Tags;
use LightSpeed\XSeries\Resource\Taxes;
use LightSpeed\XSeries\Resource\Users;
use LightSpeed\XSeries\Resource\VariantAttributes;
use LightSpeed\XSeries\Resource\Webhooks;
use Saloon\Http\Connector;
use Saloon\Http\Auth\TokenAuthenticator;

/**
 * X-Series API Collection
 */
class XSeriesSdk extends Connector
{
    public function __construct(protected readonly string $baseUrl, protected readonly string $token) {
        //
    }

    public function resolveBaseUrl(): string
    {
        return $this->baseUrl;
    }

	protected function defaultAuth(): TokenAuthenticator
    {
        return new TokenAuthenticator($this->token);
    }

	public function audit(): Audit
	{
		return new Audit($this);
	}


	public function authorization(): Authorization
	{
		return new Authorization($this);
	}


	public function brands(): Brands
	{
		return new Brands($this);
	}


	public function channelRequestLog(): ChannelRequestLog
	{
		return new ChannelRequestLog($this);
	}


	public function consigments(): Consigments
	{
		return new Consigments($this);
	}


	public function consigmentsProducts(): ConsigmentsProducts
	{
		return new ConsigmentsProducts($this);
	}


	public function customFields(): CustomFields
	{
		return new CustomFields($this);
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


	public function giftCards(): GiftCards
	{
		return new GiftCards($this);
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


	public function partnerBilling(): PartnerBilling
	{
		return new PartnerBilling($this);
	}


	public function paymentTypes(): PaymentTypes
	{
		return new PaymentTypes($this);
	}


	public function priceBooks(): PriceBooks
	{
		return new PriceBooks($this);
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


	public function promoCodes(): PromoCodes
	{
		return new PromoCodes($this);
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


	public function remoteRules(): RemoteRules
	{
		return new RemoteRules($this);
	}


	public function retailers(): Retailers
	{
		return new Retailers($this);
	}


	public function rules(): Rules
	{
		return new Rules($this);
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


	public function storeCredits(): StoreCredits
	{
		return new StoreCredits($this);
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


	public function webhooks(): Webhooks
	{
		return new Webhooks($this);
	}
}
