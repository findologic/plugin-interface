<?php
namespace Plenty\Modules\Order\Events;


/**
 * An Event class fired after a payment is assigned and if the order is only partly paid.
 */
abstract class OrderPartlyPaid 
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