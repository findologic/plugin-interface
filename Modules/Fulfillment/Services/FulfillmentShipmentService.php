<?php
namespace Plenty\Modules\Fulfillment\Services;

use Plenty\Legacy\Repositories\Fulfillment\Shipping\LegacyFulfillmentShippingRepository;
use Plenty\Modules\Comment\Contracts\CommentRepositoryContract;
use Plenty\Modules\Order\Contracts\OrderRepositoryContract;
use Plenty\Modules\Order\Models\Order;
use Plenty\Modules\Order\Shipping\Contracts\ParcelServicePresetRepositoryContract;
use Plenty\Modules\Order\Shipping\ServiceProvider\Contracts\ShippingServiceProviderRepositoryContract;
use Plenty\Modules\Plugin\Contracts\PluginRepositoryContract;
use Plenty\Modules\User\Contracts\UserRepositoryContract;

/**
 * Register, cancel shipments for an order.
 */
abstract class FulfillmentShipmentService 
{

	abstract public function cancelShipment(
		int $orderId
	):bool;

	abstract public function registerShipment(
		int $orderId
	):bool;

}