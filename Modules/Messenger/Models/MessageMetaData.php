<?php
namespace Plenty\Modules\Messenger\Models;


/**
 * The messenger MessageMetaData model
 */
abstract class MessageMetaData 
{
	public		$readBy;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}