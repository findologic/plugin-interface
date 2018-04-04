<?php
namespace Plenty\Modules\Tag\Models;


/**
 * The Tag model.
 */
abstract class Tag 
{

	const TAG_AVAILABILITIES_RELATION = 'availabilities';

	const TAG_NAMES_RELATION = 'names';

	const TAG_RELATIONSHIPS_RELATION = 'relationship';

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$tagName;
	public		$availabilities;
	public		$names;
	public		$relationships;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}