<?php
namespace Plenty\Modules\Item\VariationSku\Contracts;


/**
 * The contract of the variation SKU bulk repository.
 */
interface VariationSkuBulkRepositoryContract 
{

	/**
	 * Creates multiple SKUs.
	 */
	public function create(
		array $data
	);

	/**
	 * Updates status for multiple SKUs.
	 */
	public function updateStatus(
		array $ids, 
		string $status
	);

	/**
	 * Updates exportedAt for multiple SKUs.
	 */
	public function updateExportedAt(
		array $ids, 
		string $time = ""
	);

	/**
	 * Updates stockUpdatedAt for multiple SKUs.
	 */
	public function updateStockUpdatedAt(
		array $ids, 
		string $time = ""
	);

}