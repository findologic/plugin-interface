<?php
namespace Plenty\Modules\Account\Address\Models;


/**
 * The address relation type application model
 */
abstract class AddressRelationTypeApplication 
{
	public		$id;
	public		$typeId;
	public		$application;
	public		$position;
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