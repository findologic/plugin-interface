<?php
namespace Plenty\Modules\Category\Models;


/**
 * The Category Client
 */
abstract class CategoryClient 
{
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