<?php
namespace Plenty\Modules\DataExchange\Models;


/**
 * export filter
 */
abstract class Filter 
{
	public		$id;
	public		$createdAt;
	public		$updatedAt;
	public		$exportId;
	public		$key;
	public		$value;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}