<?php
namespace Plenty\Modules\Account\Contact\Contracts;


/**
 * The ContractVCardRepositoryContract is the interface for the vcard repository. The interface allows you to return a vcard filestream
 */
interface ContactVCardRepositoryContract 
{

	/**
	 * Gets a Filestream of a Vcard of a contact.
	 */
	public function getVCard(
		int $contactId
	):array;

}