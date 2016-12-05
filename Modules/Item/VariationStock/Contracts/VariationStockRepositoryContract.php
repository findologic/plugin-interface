<?php
namespace Plenty\Modules\Item\VariationStock\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\StockManagement\Stock\Models\StockStorageLocation;
use Plenty\Modules\Item\VariationStock\Models\VariationStock;
use Plenty\Modules\Item\VariationStock\Models\VariationStockMovement;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * Get, list, book and correct stock or get stock movements.
 */
interface VariationStockRepositoryContract 
{

	/**
	 * List stock per warehouse
	 */
	public function listStockByWarehouse(
		int $itemId, 
		int $variationId, 
		array $columns
	):array;

	/**
	 * List stock movements for a variation
	 */
	public function listStockMovements(
		int $itemId, 
		int $variationId, 
		array $columns, 
		int $page, 
		int $itemsPerPage
	):array;

	/**
	 * Book incoming stock
	 */
	public function bookIncomingItems(
		int $itemId, 
		int $variationId, 
		array $data
	):array;

	/**
	 * Correct stock
	 */
	public function correctStock(
		int $itemId, 
		int $variationId, 
		array $data
	):array;

}