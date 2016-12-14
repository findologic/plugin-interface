<?php
namespace Plenty\Modules\Item\VariationMarket\Models;


/**
 * Variation Market
 */
abstract class VariationMarket 
{
	public		$variationId;
	public		$marketId;
	public		$createdAt;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}