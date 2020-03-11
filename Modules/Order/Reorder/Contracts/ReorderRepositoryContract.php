<?php
namespace Plenty\Modules\Order\Reorder\Contracts;

use Carbon\Carbon;
use Plenty\Exceptions\ValidationException;
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

	/**
	 * Get the date when the reorder will probably be delivered.
	 */
	public function getDeliveryDate(
		int $orderId
	):Carbon;

	/**
	 * Calculate and save the delivery dates
	 */
	public function updateDeliveryDates(
		int $orderId
	):Order;

}