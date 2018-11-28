<?php
namespace Plenty\Modules\Order\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Order\Exceptions\OrderItemDeleteException;
use Plenty\Modules\Order\Exceptions\OrderItemRelationSaveException;
use Plenty\Modules\Order\Exceptions\OrderItemSaveException;
use Plenty\Modules\Order\Models\OrderItem;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * The OrderItemRepositoryContract is the interface for the order item repository. This interface allows you to find, create and update order items. An order item can be e.g. items, surcharges and coupons. Each order item is given a unique id, which links it to a specific order.
 */
interface OrderItemRepositoryContract 
{

	/**
	 * Get an order item
	 */
	public function getOrderItem(
		int $orderItemId
	):OrderItem;

	/**
	 * Delete an order item
	 */
	public function deleteOrderItem(
		int $orderId, 
		int $orderItemId
	):bool;

	/**
	 * Search order items
	 */
	public function search(
		int $orderId, 
		int $page = 1, 
		int $itemsPerPage = 50, 
		array $with = []
	):PaginatedResult;

}