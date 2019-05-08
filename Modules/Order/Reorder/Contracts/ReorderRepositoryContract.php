<?php
namespace Plenty\Modules\Order\Reorder\Contracts;

use Plenty\Modules\Order\Models\Order;

/**
 * Create and update reorders.
 */
interface ReorderRepositoryContract 
{

	/**
	 * Create a reorder
	 */
	public function create(
		array $data
	):Order;

	/**
	 * Update a reorder
	 */
	public function update(
		int $orderId, 
		array $data
	):Order;

	/**
	 * Update currency
	 */
	public function updateCurrency(
		int $orderId, 
		array $data
	):Order;

}