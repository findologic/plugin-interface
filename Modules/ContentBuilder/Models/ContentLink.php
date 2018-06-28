<?php
namespace Plenty\Modules\ContentBuilder\Models;


/**
 * This module is deprecated. Use module 'Shop Builder' instead.
 */
abstract class ContentLink 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$contentId;
	public		$containerName;
	public		$pluginSetId;
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