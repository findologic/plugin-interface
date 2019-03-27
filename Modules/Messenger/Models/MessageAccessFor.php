<?php
namespace Plenty\Modules\Messenger\Models;


/**
 * The messenger MessageAccessFor model
 */
abstract class MessageAccessFor 
{
	public		$user;
	public		$role;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}