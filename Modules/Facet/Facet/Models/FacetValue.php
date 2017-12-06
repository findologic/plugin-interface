<?php
namespace Plenty\Modules\Facet\Facet\Models;


/**
 * The facet value model
 */
abstract class FacetValue 
{

	const ITEMS_PER_PAGE = 50;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$facetId;
	public		$cssClass;
	public		$position;
	public		$createdAt;
	public		$updatedAt;
	public		$facet;
	public		$names;
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