<?php
namespace Plenty\Modules\Item\VariationSalesPrice\Models;

use Plenty\Modules\Item\SalesPrice\Models\SalesPrice;

/**
 * VariationSalesPrice
 */
abstract class VariationSalesPrice 
{
	public		$variationId;
	public		$salesPriceId;
	public		$price;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}