<?php
namespace Plenty\Modules\Document\Models;


/**
 * Document
 */
abstract class Document 
{
	public		$id;
	public		$type;
	public		$number;
	public		$numberWithPrefix;
	public		$directoryId;
	public		$path;
	public		$userId;
	public		$source;
	
	/**
	 * returns this model as an array
	 */
	public function toArray(
	):array
	{
		return [];
	}

}