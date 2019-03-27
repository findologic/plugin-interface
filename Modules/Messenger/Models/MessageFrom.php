<?php
namespace Plenty\Modules\Messenger\Models;


/**
 * The messenger MessageFrom model
 */
abstract class MessageFrom 
{
	public		$type;
	public		$value;
	public		$name;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}