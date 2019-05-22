<?php
namespace Plenty\Modules\Messenger\Models;


/**
 * The messenger MessageLinkedTo model
 */
abstract class MessageLinkedTo 
{
	public		$type;
	public		$value;
	public		$typeId;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}