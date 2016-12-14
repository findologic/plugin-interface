<?php
namespace Plenty\Modules\Order\Shipping\Models;


/**
 * The Default Shipping model
 */
abstract class DefaultShipping 
{
	public		$id;
	public		$referrerId;
	public		$shippingDestinationId;
	public		$position;
	public		$paymentMethod1;
	public		$paymentMethod2;
	public		$paymentMethod3;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}