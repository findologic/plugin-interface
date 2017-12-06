<?php
namespace Plenty\Modules\Facet\Facet\Models;


/**
 * The facet model
 */
abstract class Facet 
{

	const ITEMS_PER_PAGE = 50;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$cssClass;
	public		$position;
	public		$sort;
	public		$createdAt;
	public		$updatedAt;
	public		$type;
	public		$minResultCount;
	public		$maxResultCount;
	public		$filterMethod;
	public		$names;
	public		$values;
	public		$references;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}