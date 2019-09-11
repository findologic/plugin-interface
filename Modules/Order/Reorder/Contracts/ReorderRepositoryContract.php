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
	 * Delete a reorder
	 */
	public function delete(
		int $orderId
	);

	/**
	 * Delete an order item from a reorder
	 */
	public function deleteOrderItem(
		int $orderItemId
	):bool;

	/**
	 * Update currency
	 */
	public function updateCurrency(
		int $orderId, 
		array $data
	):Order;

}