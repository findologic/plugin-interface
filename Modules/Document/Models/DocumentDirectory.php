<?php
namespace Plenty\Modules\Document\Models;


/**
 * The document directory model
 */
abstract class DocumentDirectory 
{
	public		$id;
	public		$displayType;
	public		$name;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}