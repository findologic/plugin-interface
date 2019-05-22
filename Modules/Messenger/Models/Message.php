<?php
namespace Plenty\Modules\Messenger\Models;


/**
 * The messenger Message model
 */
abstract class Message 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$uuid;
	public		$plentyIdHash;
	public		$linkedTo;
	public		$visibility;
	public		$accessFor;
	public		$whispered;
	public		$tags;
	public		$from;
	public		$title;
	public		$preview;
	public		$message;
	public		$attachedFilesCount;
	public		$referrer;
	public		$metaData;
	public		$doneAt;
	public		$createdAt;
	public		$updatedAt;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}