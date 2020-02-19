<?php
namespace Plenty\Modules\Order\Shipping\Returns\Services\Entries;

use Illuminate\Translation\Translator;

/**
 * The returns provider entry contains all information needed to use module returns in plentymarkets returns .
 */
abstract class ReturnsServiceProviderEntry 
{

	/**
	 * Get the
	 */
	abstract public function getReturnsServiceProviderLabel(
	):string;

	/**
	 * Set the
	 */
	abstract public function setReturnsServiceProviderLabel(
		string $returnsServiceProviderLabel
	):ReturnsServiceProviderEntry;

	/**
	 * Get the
	 */
	abstract public function getReturnsServiceProviderCode(
	):string;

	/**
	 * Set the
	 */
	abstract public function setReturnsServiceProviderCode(
		string $returnsServiceProviderCode
	):ReturnsServiceProviderEntry;

	abstract public function getReturnsServiceProviderClass(
		string $methodName
	):string;

	abstract public function methodExists(
		string $methodName
	):bool;

	/**
	 * Get the
	 */
	abstract public function getProviderId(
	):int;

	abstract public function getUseParentOrderId(
	):bool;

}