<?php
namespace Plenty\Modules\Webshop\Events;


/**
 * ValidateVatNumberEvent
 */
abstract class ValidateVatNumber 
{

	abstract public function getVatNumber(
	):string;

}