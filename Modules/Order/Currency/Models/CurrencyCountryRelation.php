<?php
namespace Plenty\Modules\Order\Currency\Models;

use Plenty\Modules\Order\Shipping\Countries\Models\Country;

/**
 * The CurrencyCountryRelation model indicates which currency is related to which country.
 */
abstract class CurrencyCountryRelation 
{
	public		$id;
	public		$currency;
	public		$countryId;
	public		$country;
	public		$currencyInstance;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}