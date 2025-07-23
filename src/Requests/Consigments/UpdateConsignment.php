<?php

namespace LightSpeed\XSeries\Requests\Consigments;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update a consignment
 */
class UpdateConsignment extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/consignments/{$this->consignmentId}";
	}


	/**
	 * @param string $consignmentId
	 * @param null|mixed $outletId
	 * @param null|mixed $name
	 * @param null|mixed $dueAt
	 * @param null|mixed $type
	 * @param null|mixed $status
	 * @param null|mixed $supplierId
	 * @param null|mixed $sourceOutletId
	 * @param null|mixed $consignmentDate
	 * @param null|mixed $receivedAt
	 * @param null|mixed $showInactive
	 * @param null|mixed $supplierInvoice
	 * @param null|mixed $reference
	 * @param null|mixed $totalCountGain
	 * @param null|mixed $totalCostGain
	 * @param null|mixed $totalCountLoss
	 * @param null|mixed $totalCostLoss
	 * @param null|mixed $createdAt
	 * @param null|mixed $updatedAt
	 * @param null|mixed $deletedAt
	 * @param null|mixed $version
	 * @param null|mixed $filters
	 */
	public function __construct(
		protected string $consignmentId,
		protected mixed $outletId = null,
		protected mixed $name = null,
		protected mixed $dueAt = null,
		protected mixed $type = null,
		protected mixed $status = null,
		protected mixed $supplierId = null,
		protected mixed $sourceOutletId = null,
		protected mixed $consignmentDate = null,
		protected mixed $receivedAt = null,
		protected mixed $showInactive = null,
		protected mixed $supplierInvoice = null,
		protected mixed $reference = null,
		protected mixed $totalCountGain = null,
		protected mixed $totalCostGain = null,
		protected mixed $totalCountLoss = null,
		protected mixed $totalCostLoss = null,
		protected mixed $createdAt = null,
		protected mixed $updatedAt = null,
		protected mixed $deletedAt = null,
		protected mixed $version = null,
		protected mixed $filters = null,
	) {
	}


	public function defaultBody(): array
	{
		return array_filter([
			'outlet_id' => $this->outletId,
			'name' => $this->name,
			'due_at' => $this->dueAt,
			'type' => $this->type,
			'status' => $this->status,
			'supplier_id' => $this->supplierId,
			'source_outlet_id' => $this->sourceOutletId,
			'consignment_date' => $this->consignmentDate,
			'received_at' => $this->receivedAt,
			'show_inactive' => $this->showInactive,
			'supplier_invoice' => $this->supplierInvoice,
			'reference' => $this->reference,
			'total_count_gain' => $this->totalCountGain,
			'total_cost_gain' => $this->totalCostGain,
			'total_count_loss' => $this->totalCountLoss,
			'total_cost_loss' => $this->totalCostLoss,
			'created_at' => $this->createdAt,
			'updated_at' => $this->updatedAt,
			'deleted_at' => $this->deletedAt,
			'version' => $this->version,
			'filters' => $this->filters,
		]);
	}
}
