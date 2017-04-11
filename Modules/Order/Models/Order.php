<?php
namespace Plenty\Modules\Order\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Plenty\Modules\Account\Address\Models\Address;
use Plenty\Modules\Authentication\Models\User;
use Plenty\Modules\Order\RelationReference\Models\OrderRelationReference;

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
	public		$orderReferences;
	public		$dates;
	public		$originOrder;
	public		$parentOrder;
	public		$originOrders;
	public		$parentOrders;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}