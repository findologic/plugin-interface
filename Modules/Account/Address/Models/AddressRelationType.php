<?php
namespace Plenty\Modules\Account\Address\Models;

use Illuminate\Database\Eloquent\Collection;

/**
 * The contact address type model
 */
abstract class AddressRelationType 
{
	public		$id;
	public		$position;
	public		$nonErasable;
	public		$names;
	public		$application;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}