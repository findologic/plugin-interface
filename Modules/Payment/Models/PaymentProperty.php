<?php
namespace Plenty\Modules\Payment\Models;


/**
 * The payment property model
 */
abstract class PaymentProperty 
{
	public		$id;
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