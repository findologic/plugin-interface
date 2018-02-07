<?php
namespace Plenty\Modules\Property\Models;


/**
 * The property name model. A property can have several names. One name per language. Each name has a unique ID.
 */
abstract class PropertyName 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$propertyId;
	public		$lang;
	public		$name;
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