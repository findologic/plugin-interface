<?php
namespace Plenty\Modules\Catalog\Models;


/**
 * The catalog model
 */
abstract class Catalog 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$data;
	public		$name;
	public		$template;
	public		$id;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}