<?php
namespace Plenty\Modules\Property\Models;


/**
 * The property relation value model.
 */
abstract class PropertyRelationValue 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$propertyRelationId;
	public		$lang;
	public		$value;
	public		$description;
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