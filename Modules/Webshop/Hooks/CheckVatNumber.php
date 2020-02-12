<?php
namespace Plenty\Modules\Webshop\Hooks;

use Illuminate\Support\MessageBag;
use Plenty\Modules\System\Contracts\WebstoreConfigurationRepositoryContract;
use Plenty\Modules\Webshop\Contracts\VatNumberRepositoryContract;
use Plenty\Modules\Webshop\Events\ValidateVatNumber;
use Plenty\Modules\Webshop\Exceptions\VatNumberException;
use Plenty\Modules\Webshop\Repositories\VatNumberRepository;

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