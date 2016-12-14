<?php
namespace Plenty\Modules\Order\Models\Legacy;

use Plenty\Modules\Account\Address\Models\Address;
use Illuminate\Database\Eloquent\Collection;
use Plenty\Modules\Account\Contact\Models\Contact;
use Plenty\Modules\Account\Address\Models\AddressRelationType;

/**
 * The legacy order model
 */
abstract class Order 
{
	public		$id;
	public		$orderType;
	public		$contactId;
	public		$referrerId;
	public		$status;
	public		$userId;
	public		$entryDate;
	public		$webstoreId;
	public		$warehouseId;
	public		$sellerAccount;
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