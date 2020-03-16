<?php
namespace Plenty\Modules\Webshop\Order\Contracts;

use Plenty\Modules\Order\Models\Order;

/**
 * Create orders from the webshop
 */
interface OrderRepositoryContract 
{

	public function placeOrder(
	):Order;

}