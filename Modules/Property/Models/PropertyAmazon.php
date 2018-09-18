<?php
namespace Plenty\Modules\Property\Models;


/**
 * The property amazon model.
 */
abstract class PropertyAmazon 
{

	const MAX_ITEMS_PER_PAGE = 50;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$propertyId;
	public		$platform;
	public		$category;
	public		$field;
	public		$createdAt;
	public		$updatedAt;
	public		$propertyRelation;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}