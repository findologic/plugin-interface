<?php
namespace Plenty\Modules\DataExchange\Models;


/**
 * Export model
 */
abstract class Export 
{
	public		$id;
	public		$name;
	public		$type;
	public		$limit;
	public		$createdAt;
	public		$updatedAt;
	public		$formatKey;
	public		$outputType;
	public		$filters;
	public		$outputParams;
	public		$formatSettings;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}