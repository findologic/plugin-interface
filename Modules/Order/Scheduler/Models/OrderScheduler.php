<?php
namespace Plenty\Modules\Order\Scheduler\Models;

use Plenty\Modules\Account\Address\Models\Address;
use Illuminate\Database\Eloquent\Collection;
use Plenty\Modules\Account\Contact\Models\Contact;
use Plenty\Modules\Account\Address\Models\AddressRelationType;

/**
 * The legacy order model
 */
abstract class OrderScheduler 
{
	public		$id;
	public		$contactId;
	public		$deliveryAddress;
	public		$billingAddress;
	public		$addresses;
	public		$addressRelations;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}