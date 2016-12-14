<?php
namespace Plenty\Modules\Accounting\Vat\Contracts;

use Plenty\Modules\Accounting\Exceptions\AccountingException;
use Plenty\Modules\Accounting\Vat\Exceptions\VatException;
use Plenty\Modules\Accounting\Vat\Models\Vat;

/**
 * Provides methods for vat initialization and vat rate or vat field detection.
 */
interface VatInitContract 
{

	/**
	 * Initialize the VAT system data.
	 */
	public function init(
		int $billingCountryId, 
		string $taxIdNumber, 
		int $locationId, 
		int $shippingCountryId = 0, 
		string $startedAt = null
	);

	/**
	 * Get whether the VAT system is already initialized or not.
	 */
	public function isInitialized(
	):bool;

	/**
	 * Get the vat field for the given vat rate.
	 */
	public function getVatField(
		float $vatRate, 
		bool $restrictedToDigitalItems = false
	):int;

	/**
	 * Get the vat rate for the given vat field.
	 */
	public function getVatRate(
		int $vatField, 
		bool $restrictedToDigitalItems = false
	):float;

	/**
	 * Get the Vat instance used.
	 */
	public function getUsingVat(
		bool $restrictedToDigitalItems = false
	):Vat;

	/**
	 * Get the vat rates of the using Vat instance.
	 */
	public function getUsingVatRates(
		bool $restrictedToDigitalItems = false
	):array;

	/**
	 * Get a standard VAT configuration by location ID
	 */
	public function getStandardVatByLocationId(
		int $locationId, 
		string $startedAt = null
	):Vat;

}