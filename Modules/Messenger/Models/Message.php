<?php
namespace Plenty\Modules\Messenger\Models;


/**
 * The messenger Message model
 */
abstract class Message 
{

	const STORAGE = 'messages';
	public		$uuid;
	public		$plentyIdHash;
	public		$parentUuid;
	public		$linkedTo;
	public		$from;
	public		$to;
	public		$whispered;
	public		$tags;
	public		$title;
	public		$preview;
	public		$message;
	public		$attachedFilesCount;
	public		$referrer;
	public		$metaData;
	public		$doneAt;
	public		$createdAt;
	public		$updatedAt;
	public		$deletedAt;
	public		$deletedBy;
	public		$attachments;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}