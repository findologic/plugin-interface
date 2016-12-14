<?php
namespace Plenty\Modules\Item\VariationSku\Contracts;

use Plenty\Modules\Item\VariationSku\Models\VariationSku;
use Plenty\Repositories\Models\DeleteResponse;

/**
 * Repository for VariationSku
 */
interface VariationSkuRepositoryContract 
{

	/**
	 * Generate or update Sku
	 */
	public function generateSku(
		int $variationId, 
		int $marketId, 
		int $accountId, 
		 $sku = null, 
		bool $setLastExportedTimestamp = true
	):string;

	/**
	 * Create sku
	 */
	public function create(
		array $data
	):VariationSku;

	/**
	 * Update sku
	 */
	public function update(
		array $data, 
		int $skuId
	):VariationSku;

	/**
	 * Delete sku
	 */
	public function delete(
		int $skuId
	):DeleteResponse;

	/**
	 * Show sku
	 */
	public function show(
		int $skuId
	):VariationSku;

	/**
	 * Search sku´s
	 */
	public function search(
		array $filter
	):array;

	/**
	 * Find sku´s by variationId
	 */
	public function findByVariationId(
		int $variationId
	):array;

}