<?php
namespace Plenty\Modules\Cloud\Storage\Models;


/**
 * Represent a storage object
 */
abstract class StorageObject 
{
	public		$key;
	public		$lastModified;
	public		$eTag;
	public		$size;
	public		$storageClass;
	public		$body;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}