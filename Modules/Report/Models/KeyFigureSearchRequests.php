<?php
namespace Plenty\Modules\Report\Models;


/**
 * The model represent several key figure search requests.
 */
abstract class KeyFigureSearchRequests 
{
	public		$searchRequests;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}