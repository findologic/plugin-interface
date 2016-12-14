<?php
namespace Plenty\Modules\Payment\History\Models;


/**
 * The payment history model
 */
abstract class PaymentHistory 
{
	public		$Id;
	public		$paymentId;
	public		$typeId;
	public		$value;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}