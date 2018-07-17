<?php
namespace Plenty\Modules\Plugin\Services;


/**
 * The PluginSendMailService send mails in plugins
 */
abstract class PluginSendMailService 
{

	const PASSWORD_RESET = 'pw_reset';

	abstract public function sendMail(
		string $url, 
		string $template, 
		string $email = ""
	):bool;

	abstract public function getStatus(
	):bool;

	abstract public function setStatus(
		bool $status
	);

}