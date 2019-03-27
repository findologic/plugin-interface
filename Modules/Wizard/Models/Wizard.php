<?php
namespace Plenty\Modules\Wizard\Models;


/**
 * The wizard model.
 */
abstract class Wizard 
{
	public		$title;
	public		$key;
	public		$settingsHandlerClass;
	public		$shortDescription;
	public		$translationKey;
	public		$topics;
	public		$steps;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}