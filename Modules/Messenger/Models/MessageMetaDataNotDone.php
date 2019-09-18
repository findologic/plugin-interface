<?php
namespace Plenty\Modules\Messenger\Models;


/**
 * The messenger MessageMetaDataNotDone model
 */
abstract class MessageMetaDataNotDone 
{
	public		$deactivated;
	public		$tooltips;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}