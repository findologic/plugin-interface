<?php
namespace Plenty\Modules\ElasticSync\Models\Core;


/**
 * The elastic sync mapping row model.
 */
abstract class ElasticSyncMappingRow 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$mappingId;
	public		$targetModel;
	public		$targetAttribute;
	public		$active;
	public		$entityType;
	public		$value;
	public		$settings;
	public		$identifiers;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}