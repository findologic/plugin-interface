<?php
namespace Plenty\Modules\Item\SalesPrice\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Item\SalesPrice\Models\SalesPriceCustomerClass;
use Plenty\Repositories\Models\DeleteResponse;

/**
 * The contract for the sales price customer class repository
 */
interface SalesPriceCustomerClassRepositoryContract 
{

	/**
	 * Creates a sales price customer class. The ID of the sales price must be specified.
	 */
	public function create(
		array $data, 
		int $salesPriceId
	):SalesPriceCustomerClass;

	/**
	 * Deletes a sales price customer class. The ID of the sales price and the ID of the customer class must be specified.
	 */
	public function delete(
		int $salesPriceId, 
		int $customerClassId
	):DeleteResponse;

	/**
	 * Gets a sales price customer class. The ID of the sales price and the ID of the customer class must be specified.
	 */
	public function findOne(
		int $salesPriceId, 
		int $customerClassId
	):SalesPriceCustomerClass;

	/**
	 * Lists sales price customer classes. The ID of the sales price must be specified.
	 */
	public function findByPriceId(
		int $salesPriceId
	):array;

	/**
	 * Deletes sales price customer classes. The ID of the sales price must be specified.
	 */
	public function deleteByPriceId(
		int $salesPriceId
	):DeleteResponse;

}