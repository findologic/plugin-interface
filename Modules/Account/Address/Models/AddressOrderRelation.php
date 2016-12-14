<?php
namespace Plenty\Modules\Account\Address\Models;

use Plenty\Modules\Order\Models\Order;

/**
 * address order relation model
 */
abstract class AddressOrderRelation 
{
	public		$id;
	public		$orderId;
	public		$typeId;
	public		$addressId;
	public		$address;
	public		$order;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}