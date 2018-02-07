<?php
namespace Plenty\Modules\Property\Models;


/**
 * The property group relation model. The model shows which property is related to which property group.
 */
abstract class PropertyGroupRelation 
{

	const table = 'plenty_property_group_relation';

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$propertyId;
	public		$propertyGroupId;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}