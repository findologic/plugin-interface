<?php
namespace Plenty\Modules\ItemSet\Models;

use Illuminate\Database\Eloquent\Collection;
use Plenty\Modules\Item\Variation\Models\Variation;
use Plenty\Modules\Item\VariationDescription\Models\VariationDescription;

/**
 * The ItemSet model.
 */
abstract class ItemSet 
{
	public		$id;
	public		$name;
	public		$categories;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}