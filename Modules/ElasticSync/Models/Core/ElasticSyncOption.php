<?php
namespace Plenty\Modules\ElasticSync\Models\Core;


/**
 * The elastic sync option model.
 */
abstract class ElasticSyncOption 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$syncId;
	public		$optionIdentifier;
	public		$key;
	public		$value;
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