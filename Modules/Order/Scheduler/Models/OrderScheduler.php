<?php
namespace Plenty\Modules\Order\Scheduler\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Plenty\Modules\Account\Address\Models\Address;
use Plenty\Modules\Account\Contact\Models\Contact;

/**
 * The legacy order model
 */
abstract class OrderScheduler 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$contactId;
	public		$methodOfPayment;
	public		$start;
	public		$last;
	public		$end;
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