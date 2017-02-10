<?php
namespace Plenty\Modules\Account\Newsletter\Contracts;


/**
 * The NewsletterRepositoryContract is the interface for the newsletter repository. This interface allows to assign email addresses of contacts or interested parties to email folders. Depending on the settings selected for each email folder, different newsletters can be sent to different target groups.
 */
interface NewsletterRepositoryContract 
{

	/**
	 * Adds the email address of a contact or an interested party to an email folder for the newsletter list.
	 */
	public function addToNewsletterList(
		string $email, 
		string $forename = "", 
		string $surname = "", 
		array $emailDirIds = []
	);

}