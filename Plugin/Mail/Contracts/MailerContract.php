<?php
namespace Plenty\Plugin\Mail\Contracts;


/**
 * Plugin Mailer Service
 */
interface MailerContract 
{

	/**
	 * Send an email containing html
	 */
	public function sendHtml(
		string $html, 
		 $recipients, 
		string $subject = "", 
		array $cc = [], 
		array $bcc = []
	);

}