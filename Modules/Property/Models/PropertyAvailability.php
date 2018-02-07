<?php
namespace Plenty\Modules\Property\Models;


/**
 * The property availability model.
 */
abstract class PropertyAvailability 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$propertyId;
	public		$type;
	public		$value;
	public		$createdAt;
	public		$updatedAt;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}