<?php
namespace Plenty\Modules\Facet\Facet\Models;


/**
 * The webstore facet link model
 */
abstract class WebstoreFacetLink 
{

	const ITEMS_PER_PAGE = 50;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$facetId;
	public		$webstoreId;
	public		$imagePrepare;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}