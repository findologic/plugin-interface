<?php
namespace Plenty\Modules\Basket\Events\BasketItem;

use Plenty\Modules\Basket\Models\BasketItem;

/**
 * The event is triggered before an item is created in the shopping cart.
 */
abstract class BeforeBasketItemAdd 
{

	public function getBasketItem(
	):BasketItem
	{
		return new BasketItem();
	}

}