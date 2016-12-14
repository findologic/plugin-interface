<?php
namespace Plenty\Modules\Item\ShippingSupport\Models;


/**
 * The shipping support model
 */
abstract class ShippingSupport 
{
	public		$id;
	public		$itemId;
	public		$profileId;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}