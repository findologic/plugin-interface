<?php
namespace Plenty\Modules\Account\Contact\Models;


/**
 * contact position model
 */
abstract class ContactPosition 
{
	public		$id;
	public		$position;
	public		$names;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}