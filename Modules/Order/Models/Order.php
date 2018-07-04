<?php
namespace Plenty\Modules\Order\Models;


/**
 * The order model.
 */
abstract class Order 
{

	const CREATED_AT = 'order_main_entry_timestamp';

	const UPDATED_AT = 'last_update';
	public		$id;
	public		$typeId;
	public		$methodOfPaymentId;
	public		$shippingProfileId;
	public		$paymentStatus;
	public		$statusId;
	public		$statusName;
	public		$ownerId;
	public		$createdAt;
	public		$updatedAt;
	public		$plentyId;
	public		$locationId;
	public		$lockStatus;
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
	public		$location;
	public		$payments;
	public		$orderReferences;
	public		$reverseOrderReferences;
	public		$documents;
	public		$dates;
	public		$originOrder;
	public		$parentOrder;
	public		$originOrders;
	public		$parentOrders;
	public		$childOrders;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}