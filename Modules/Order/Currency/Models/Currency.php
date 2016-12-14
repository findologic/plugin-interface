<?php
namespace Plenty\Modules\Order\Currency\Models;

use Illuminate\Database\Eloquent\Collection;
use Plenty\Modules\Order\Shipping\Countries\Models\Country;

/**
 * The currency model. The model includes information like ISO 4217 code and the related symbols as well as the countries that a currency is used in.
 */
abstract class Currency 
{
	public		$currency;
	public		$htmlCode;
	public		$unicodeSign;
	public		$isActive;
	public		$isErasable;
	public		$countries;
	public		$names;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}