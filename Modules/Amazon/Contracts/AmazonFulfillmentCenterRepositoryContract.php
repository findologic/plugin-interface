<?php
namespace Plenty\Modules\Amazon\Contracts;

use Plenty\Modules\Account\Address\Models\Address;

/**
 * AmazonFulfillmentCenterRepository
 */
interface AmazonFulfillmentCenterRepositoryContract 
{

	public function getDeliveryAddressByFulfillmentCenterId(
		string $amazonFulfillmentCenterId
	):Address;

	public function getDeliveryAddressByGLN(
		string $GLN
	):Address;

	public function getInvoiceAddressByGLN(
		string $GLN
	):Address;

	public function getContactId(
	):int;

}