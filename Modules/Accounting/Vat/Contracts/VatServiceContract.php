<?php
namespace Plenty\Modules\Accounting\Vat\Contracts;

use Plenty\Modules\Accounting\Vat\Models\Vat;

/**
 * Provides methods for quick vat field/rate/name search on a given Vat instance.
 */
interface VatServiceContract 
{

	/**
	 * Get the vat field for the given vat rate.
	 */
	public function getVatField(
		Vat $vat, 
		float $vatRate
	):int;

	/**
	 * Get the vat rate for the given vat field.
	 */
	public function getVatRate(
		Vat $vat, 
		int $vatField
	):float;

	/**
	 * Get the vat name for the given vat field.
	 */
	public function getVatName(
		Vat $vat, 
		int $vatField
	):string;

}