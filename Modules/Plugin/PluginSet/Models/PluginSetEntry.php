<?php
namespace Plenty\Modules\Plugin\PluginSet\Models;


/**
 * Eloquent model representing a Plugin.
 */
abstract class PluginSetEntry 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$pluginId;
	public		$pluginSetId;
	public		$plugin;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}