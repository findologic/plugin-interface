<?php
namespace Plenty\Modules\Messenger\Models;


/**
 * The MessageMetaDataTimeCapture model of the messenger.
 */
abstract class MessageMetaDataTimeCapture 
{
	public		$id;
	public		$chargeable;
	public		$minutes;
	public		$messageUuid;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}