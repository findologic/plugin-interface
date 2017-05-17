<?php
namespace Plenty\Modules\Order\Events\Changed;

use Plenty\Modules\Order\Models\Order;

/**
 * An event class fired after the status of an order has changed.
 */
abstract class OrderStatusChanged 
{

	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}