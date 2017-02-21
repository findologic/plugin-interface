<?php
namespace Plenty\Modules\Order\Models;

use Illuminate\Database\Eloquent\Collection;
use Carbon\Carbon;
use Plenty\Modules\Account\Address\Models\Address;
use Plenty\Modules\Authentication\Models\User;

/**
 * The order model.
 */
abstract class Order 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$typeId;
	public		$methodOfPaymentId;
	public		$shippingProfileId;
	public		$paymentStatus;
	public		$statusId;
	public		$ownerId;
	public		$createdAt;
	public		$updatedAt;
	public		$plentyId;
	public		$billingAddress;
	public		$deliveryAddress;
	public		$owner;
	public		$addresses;
	public		$addressRelations;
	public		$orderItems;
	public		$properties;
	public		$relations;
	public		$amounts;
	public		$comments;
	public		$dates;
	public		$originOrder;
	public		$parentOrder;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}