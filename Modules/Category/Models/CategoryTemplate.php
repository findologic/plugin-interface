<?php
namespace Plenty\Modules\Category\Models;

use Illuminate\Database\Eloquent\Collection;

/**
 * Category Template
 */
abstract class CategoryTemplate 
{
	public		$categoryId;
	public		$plentyId;
	public		$lang;
	public		$content;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}