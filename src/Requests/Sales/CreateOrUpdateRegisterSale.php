<?php

namespace LightSpeed\XSeries\Requests\Sales;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create or update a register sale
 */
class CreateOrUpdateRegisterSale extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/api/register_sales";
	}


	/**
	 * @param null|mixed $registerSaleProducts
	 * @param null|mixed $registerSalePayments
	 * @param null|mixed $registerId
	 * @param null|mixed $customerId
	 * @param null|mixed $userId
	 * @param null|mixed $source
	 * @param null|mixed $sourceId
	 * @param null|mixed $saleDate
	 * @param null|mixed $note
	 * @param null|mixed $status
	 * @param null|mixed $shortCode
	 * @param null|mixed $invoiceNumber
	 * @param null|mixed $accountsTransactionId
	 */
	public function __construct(
		protected mixed $registerSaleProducts = null,
		protected mixed $registerSalePayments = null,
		protected mixed $registerId = null,
		protected mixed $customerId = null,
		protected mixed $userId = null,
		protected mixed $source = null,
		protected mixed $sourceId = null,
		protected mixed $saleDate = null,
		protected mixed $note = null,
		protected mixed $status = null,
		protected mixed $shortCode = null,
		protected mixed $invoiceNumber = null,
		protected mixed $accountsTransactionId = null,
	) {
	}


	public function defaultBody(): array
	{
		return array_filter([
			'register_sale_products' => $this->registerSaleProducts,
			'register_sale_payments' => $this->registerSalePayments,
			'register_id' => $this->registerId,
			'customer_id' => $this->customerId,
			'user_id' => $this->userId,
			'source' => $this->source,
			'source_id' => $this->sourceId,
			'sale_date' => $this->saleDate,
			'note' => $this->note,
			'status' => $this->status,
			'short_code' => $this->shortCode,
			'invoice_number' => $this->invoiceNumber,
			'accounts_transaction_id' => $this->accountsTransactionId,
		]);
	}


	public function defaultHeaders(): array
	{
		return array_filter([]);
	}
}
