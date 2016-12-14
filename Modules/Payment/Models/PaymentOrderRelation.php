<?php
namespace Plenty\Modules\Payment\Models;


/**
 * The payment order relation model
 */
abstract class PaymentOrderRelation 
{
	public		$id;
	public		$paymentId;
	public		$orderId;
	public		$assignedAt;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}