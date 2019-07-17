<?php
namespace Plenty\Modules\Messenger\Models;


/**
 * The messenger Attachment model
 */
abstract class Attachment 
{

	const STORAGE = 'attachments';
	public		$name;
	public		$message;
	public		$size;
	public		$contentType;
	public		$content;
	public		$createdAt;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}