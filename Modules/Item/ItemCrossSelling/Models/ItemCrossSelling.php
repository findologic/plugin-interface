<?php
namespace Plenty\Modules\Item\ItemCrossSelling\Models;

use Illuminate\Database\Eloquent\Collection;
use Plenty\Modules\Item\Item\Models\Item;

/**
 * The item cross selling model including item
 */
abstract class ItemCrossSelling 
{

	const ITEMS_PER_PAGE = 50;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$itemId;
	public		$crossItemId;
	public		$relationship;
	public		$dynamic;
	public		$item;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}