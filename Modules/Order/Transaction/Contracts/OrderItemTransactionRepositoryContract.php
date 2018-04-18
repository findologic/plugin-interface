<?php
namespace Plenty\Modules\Order\Transaction\Contracts;

use Illuminate\Database\Eloquent\Collection;
use Plenty\Modules\Order\Transaction\Models\OrderItemTransaction;

/**
 * List and create order item transactions.
 */
interface OrderItemTransactionRepositoryContract 
{

	/**
	 * List transactions
	 */
	public function list(
		int $orderItemId, 
		array $columns = [], 
		array $with = []
	):Collection;

	/**
	 * Create a transaction
	 */
	public function create(
		array $data
	):OrderItemTransaction;

}