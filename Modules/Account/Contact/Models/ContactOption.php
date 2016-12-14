<?php
namespace Plenty\Modules\Account\Contact\Models;


/**
 * The contact options model.
 */
abstract class ContactOption 
{
	public		$id;
	public		$contactId;
	public		$typeId;
	public		$subTypeId;
	public		$value;
	public		$priority;
	public		$createdAt;
	public		$updatedAt;
	public		$contact;
	public		$type;
	public		$subType;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}