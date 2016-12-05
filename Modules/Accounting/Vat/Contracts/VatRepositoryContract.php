<?php
namespace Plenty\Modules\Accounting\Vat\Contracts;

use Plenty\Modules\Accounting\Vat\Models\Vat;

/**
 * The VatRepositoryContract is the interface for the VAT functionality. This interface allows you to get the VAT configuration for an accounting location and a country of delivery.
 */
interface VatRepositoryContract 
{

	/**
	 * Get a standard VAT configuration
	 */
	public function getStandardCountryVat(
		int $plentyId = null, 
		string $startedAt = null
	):Vat;

	/**
	 * List VAT configurations for an accounting location
	 */
	public function findVatByLocationId(
		int $locationId, 
		array $relations = [], 
		array $columns = []
	):array;

	/**
	 * List VAT configuration for a country of delivery
	 */
	public function findVatByLocationIdAndCountry(
		int $locationId, 
		int $countryId, 
		array $relations = [], 
		array $columns = []
	):array;

	/**
	 * Get vat id
	 */
	public function getVatId(
		Vat $vat, 
		float $vatPercentage
	):int;

	public function determineCountryVat(
		bool $isRestricted, 
		int $contactCountryId, 
		int $locationId, 
		int $deliveryCountryId = 0, 
		string $taxIdNumber = "", 
		string $date = null
	):Vat;

}