<?php
namespace Plenty\Modules\Order\Shipping\ServiceProvider\Services\Entries;


/**
 * The shipping provider entry contains all information needed to use module shipping in plentymarkets shipping .
 */
abstract class ShippingServiceProviderEntry 
{

	/**
	 * Get the
	 */
	abstract public function getShippingProviderClass(
	):string;

	abstract public function getShippingProviderMethod(
	);

	/**
	 * Set the
	 */
	abstract public function setShippingProviderClass(
		string $shippingProviderClass
	):\Plenty\Modules\Order\Shipping\ServiceProvider\Services\Entries\ShippingServiceProviderEntry;

	/**
	 * Get the
	 */
	abstract public function getShippingProviderNames(
	):array;

	/**
	 * Set the
	 */
	abstract public function setShippingProviderNames(
		array $shippingProviderNames
	):\Plenty\Modules\Order\Shipping\ServiceProvider\Services\Entries\ShippingServiceProviderEntry;

	/**
	 * Get the
	 */
	abstract public function getShippingProviderPluginName(
	):string;

	/**
	 * Set the
	 */
	abstract public function setShippingProviderPluginName(
		string $shippingProviderPluginName
	):\Plenty\Modules\Order\Shipping\ServiceProvider\Services\Entries\ShippingServiceProviderEntry;

}