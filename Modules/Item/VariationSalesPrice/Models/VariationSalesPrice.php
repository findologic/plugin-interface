<?php
namespace Plenty\Modules\Item\VariationSalesPrice\Models;

use Plenty\Modules\Item\SalesPrice\Models\SalesPrice;

/**
 * VariationSalesPrice
 */
abstract class VariationSalesPrice 
{

	const ITEMS_PER_PAGE = 50;

	const UPDATED_AT = 'plenty_item_variation_retail_price_last_update_timestamp';

	const CREATED_AT = 'plenty_item_variation_retail_price_insert_timestamp';
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