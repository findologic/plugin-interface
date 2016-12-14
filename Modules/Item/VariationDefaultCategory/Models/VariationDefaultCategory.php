<?php
namespace Plenty\Modules\Item\VariationDefaultCategory\Models;


/**
 * Variation Default Category
 */
abstract class VariationDefaultCategory 
{
	public		$variationId;
	public		$branchId;
	public		$plentyId;
	public		$manually;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}