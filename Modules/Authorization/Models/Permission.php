<?php
namespace Plenty\Modules\Authorization\Models;


/**
 * The authentication Permission (REST) model
 */
abstract class Permission 
{
	public		$id;
	public		$permissionKey;
	public		$roles;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}