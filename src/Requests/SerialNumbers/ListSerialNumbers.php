<?php

namespace LightSpeed\XSeries\Requests\SerialNumbers;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List serial numbers
 */
class ListSerialNumbers extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/serialnumbers";
	}


	/**
	 * @param null|string $productId (string) A product ID. This filters the serial numbers to only include ones on this product.
	 * @param null|string $outletId (string) An outlet ID. This filters the serial numbers to only include ones on this outlet.
	 * @param null|string $saleId (string) A sale ID. This filters the serial numbers to only include ones that were sold in the specified sale.
	 * @param null|string $lineItemId (string) A line item ID. This filters the serial numbers to only include ones sold in the specified line item.
	 * @param null|string $after (int64) The lower limit for the version numbers to be included in the response.
	 * @param null|string $before (int64) The upper limit for the version numbers to be included in the response.
	 * @param null|string $pageSize (integer) The maximum number of items to be returned in the response.
	 */
	public function __construct(
		protected ?string $productId = null,
		protected ?string $outletId = null,
		protected ?string $saleId = null,
		protected ?string $lineItemId = null,
		protected ?string $after = null,
		protected ?string $before = null,
		protected ?string $pageSize = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'product_id' => $this->productId,
			'outlet_id' => $this->outletId,
			'sale_id' => $this->saleId,
			'line_item_id' => $this->lineItemId,
			'after' => $this->after,
			'before' => $this->before,
			'page_size' => $this->pageSize,
		]);
	}
}
