<?php
namespace Plenty\Modules\Order\Events\Canceled;


/**
 * An event class fired after an order is canceled.
 */
abstract class AfterOrderCanceled 
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