<?php
namespace Plenty\Modules\Webshop\Hooks;

use Plenty\Modules\Webshop\Contracts\VatNumberRepositoryContract;
use Plenty\Modules\Webshop\Contracts\WebstoreConfigurationRepositoryContract;
use Plenty\Modules\Webshop\Events\ValidateVatNumber;
use Plenty\Modules\Webshop\Exceptions\VatNumberException;

/**
 * CheckVatNumber
 */
abstract class CheckVatNumber 
{

	/**
	 * Validate the given vat number
	 */
	abstract public function handle(
		ValidateVatNumber $vatNumberEvent
	);

}