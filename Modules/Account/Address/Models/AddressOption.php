<?php
namespace Plenty\Modules\Account\Address\Models;


/**
 * The address options model
 */
abstract class AddressOption 
{
	public		$id;
	public		$addressId;
	public		$typeId;
	public		$value;
	public		$position;
	public		$address;
	public		$type;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}