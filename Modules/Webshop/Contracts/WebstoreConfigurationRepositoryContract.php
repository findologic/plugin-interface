<?php
namespace Plenty\Modules\Webshop\Contracts;

use Plenty\Modules\System\Models\WebstoreConfiguration;

/**
 * Repository for webstore information
 */
interface WebstoreConfigurationRepositoryContract 
{

	/**
	 * Get the webstore configuration
	 */
	public function getWebstoreConfiguration(
	):WebstoreConfiguration;

	/**
	 * Get the activate languages of the webstore
	 */
	public function getActiveLanguageList(
	):array;

	/**
	 * Get the default shipping-country-Id of the webstore
	 */
	public function getDefaultShippingCountryId(
	):int;

}