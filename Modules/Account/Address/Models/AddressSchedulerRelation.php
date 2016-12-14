<?php
namespace Plenty\Modules\Account\Address\Models;

use Plenty\Modules\Order\Scheduler\Models\OrderScheduler;

/**
 * address scheduler relation model
 */
abstract class AddressSchedulerRelation 
{
	public		$id;
	public		$schedulerId;
	public		$typeId;
	public		$addressId;
	public		$scheduler;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}