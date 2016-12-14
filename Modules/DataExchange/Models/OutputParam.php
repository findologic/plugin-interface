<?php
namespace Plenty\Modules\DataExchange\Models;


/**
 * output params
 */
abstract class OutputParam 
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