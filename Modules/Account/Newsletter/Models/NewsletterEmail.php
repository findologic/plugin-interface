<?php
namespace Plenty\Modules\Account\Newsletter\Models;


/**
 * NewsletterEmail
 */
abstract class NewsletterEmail 
{
	public		$id;
	public		$directory;
	public		$customerId;
	public		$forename;
	public		$surname;
	public		$email;
	public		$gender;
	public		$birthday;
	public		$timestamp;
	public		$templateLang;
	public		$confirmedTimestamp;
	public		$confirmAuthString;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}