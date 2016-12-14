<?php
namespace Plenty\Modules\Account\Address\Models;


/**
 * The address options type name model
 */
abstract class AddressOptionTypeName 
{
	public		$id;
	public		$typeId;
	public		$lang;
	public		$name;
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