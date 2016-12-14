<?php
namespace Plenty\Modules\Payment\Models;


/**
 * The payment property type name model
 */
abstract class PaymentPropertyTypeName 
{
	public		$id;
	public		$typeId;
	public		$lang;
	public		$name;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}