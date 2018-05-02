<?php
namespace Plenty\Modules\ContentBuilder\Models;


/**
 * The content model.
 */
abstract class Content 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$dataProviderName;
	public		$contentData;
	public		$createdAt;
	public		$updatedAt;
	public		$type;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}