<?php
namespace Plenty\Modules\Order\Events;


/**
 * An event class will be fired after a payment is assigned and if the order is overpaid.
 */
abstract class OrderOverpaid 
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