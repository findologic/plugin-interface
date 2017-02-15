<?php
namespace Plenty\Modules\Order\Events\Canceled;


/**
 * An event class fired before an order will be canceled.
 */
abstract class BeforeOrderCanceled 
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