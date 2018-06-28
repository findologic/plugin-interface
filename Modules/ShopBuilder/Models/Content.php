<?php
namespace Plenty\Modules\ShopBuilder\Models;


/**
 * Content created by the shop builder. May be linked to layout containers.
 */
abstract class Content 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$dataProviderName;
	public		$createdAt;
	public		$updatedAt;
	public		$type;
	public		$widgets;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}