<?php
namespace Plenty\Modules\Account\Contact\Contracts;


/**
 * The ContactAccessDataRepositoryContract is the interface for the contact access data repository. This interface allows to reset and change contact password, get a login URL and unblock users.
 */
interface ContactAccessDataRepositoryContract 
{

	/**
	 * Updates a password for contact.
	 */
	public function updatePassword(
		int $contactId, 
		array $data
	);

	public function sendNewCustomerPassword(
		int $contactId
	);

	public function unblockUser(
		int $contactId
	);

	public function getLoginURL(
		int $contactId
	);

}