<?php
namespace Plenty\Modules\Webshop\Contracts;


/**
 * Repository to get and set checkout data
 */
interface CheckoutRepositoryContract 
{

	public function getCurrency(
	):string;

	public function setCurrency(
		string $currency
	);

	public function getShippingCountryId(
	):int;

}