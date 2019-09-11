<?php
namespace Plenty\Modules\Order\Redistribution\Contracts;

use Plenty\Modules\Order\Models\Order;

/**
 * Create and update redistributions.
 */
interface RedistributionRepositoryContract 
{

	/**
	 * Create a redistribution
	 */
	public function create(
		array $data
	):Order;

	/**
	 * Update a redistribution
	 */
	public function update(
		int $orderId, 
		array $data
	):Order;

	/**
	 * Delete a redistribution
	 */
	public function delete(
		int $orderId
	);

}