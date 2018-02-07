<?php
namespace Plenty\Modules\Property\Models;


/**
 * The property relation model allows to relate a property e.g. to a variation or other targets.
 */
abstract class PropertyRelation 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$propertyId;
	public		$relationTypeIdentifier;
	public		$relationTargetId;
	public		$selectionRelationId;
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