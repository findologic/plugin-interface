<?php
namespace Plenty\Modules\Webshop\Events;


/**
 * Event for receiving or manupulating the order item
 */
abstract class AfterBasketItemToOrderItem 
{

	abstract public function getOrderItem(
	):array;

	abstract public function getBasketItem(
	):array;

}