<?php
namespace Plenty\Modules\Account\Contact\Models;


/**
 * contact options sub type name model
 */
abstract class ContactOptionSubTypeName 
{
	public		$id;
	public		$subTypeId;
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