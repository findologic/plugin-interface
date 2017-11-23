<?php
namespace Plenty\Modules\Order\Shipping\Events;


/**
 * An event class fired after the shipping calculation is done. Listeners can add fees to the shipping costs.
 * The shipping provider type name is mandatory, orderId is optional.
 */
abstract class AfterShippingCostCalculated 
{

	/**
	 * Get the
	 */
	abstract public function getShippingServiceProvider(
	):int;

	/**
	 * AfterShippingCostCalculated constructor.
	 */
	abstract public function __construct(
		string $shippingServiceProvider, 
		int $orderId, 
		int $shippingProfileId
	);

	/**
	 * Get the
	 */
	abstract public function getOrderId(
	):int;

	/**
	 * Get the
	 */
	abstract public function getAdditonalFee(
	):float;

	/**
	 * Set the
	 */
	abstract public function addAdditionalFee(
		float $additonalFee
	):AfterShippingCostCalculated;

	abstract public function getShippingProfileId(
	):int;

	abstract public function setShippingProfileId(
		int $shippingProfileId
	);

}