<?php
namespace Plenty\Modules\Order\Shipping\Package\Models;

use Plenty\Modules\Order\Models\Order;

/**
 * The order shipping package model
 */
abstract class OrderShippingPackage 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$orderId;
	public		$packageId;
	public		$weight;
	public		$packageNumber;
	public		$labelPath;
	public		$packageType;
	public		$volume;
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