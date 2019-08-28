<?php
namespace Plenty\Modules\Basket\Events\BasketItem;

use Plenty\Modules\Basket\Models\BasketItem;

/**
 * BasketItemEvent
 */
abstract class BasketItemEvent 
{

	public function getBasketItem(
	):BasketItem
	{
		return new BasketItem();
	}

}