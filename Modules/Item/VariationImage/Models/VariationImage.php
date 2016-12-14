<?php
namespace Plenty\Modules\Item\VariationImage\Models;

use Plenty\Modules\Item\Variation\Models\Variation;

abstract class VariationImage 
{
	public		$id;
	public		$itemId;
	public		$variationId;
	public		$imageId;
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