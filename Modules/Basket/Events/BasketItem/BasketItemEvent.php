<?php
namespace Plenty\Modules\Basket\Events\BasketItem;

use Plenty\Modules\Basket\Models\BasketItem;

/**
 * BasketItemEvent
 */
abstract class BasketItemEvent 
{

	abstract public function getBasketItem(
	):BasketItem;

}