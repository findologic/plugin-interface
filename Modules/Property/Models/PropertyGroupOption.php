<?php
namespace Plenty\Modules\Property\Models;


/**
 * The property group option model.
 */
abstract class PropertyGroupOption 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$propertyGroupId;
	public		$groupOptionIdentifier;
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