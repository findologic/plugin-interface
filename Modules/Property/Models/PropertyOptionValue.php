<?php
namespace Plenty\Modules\Property\Models;


/**
 * The property option value model.
 */
abstract class PropertyOptionValue 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$optionId;
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