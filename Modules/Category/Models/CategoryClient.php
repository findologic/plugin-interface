<?php
namespace Plenty\Modules\Category\Models;

use Plenty\Modules\System\Models\Webstore;

/**
 * The Category Client
 */
abstract class CategoryClient 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$plentyId;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}