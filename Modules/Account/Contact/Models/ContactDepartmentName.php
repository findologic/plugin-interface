<?php
namespace Plenty\Modules\Account\Contact\Models;


/**
 * contact department name model
 */
abstract class ContactDepartmentName 
{
	public		$id;
	public		$departmentId;
	public		$lang;
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