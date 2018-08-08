<?php
namespace Plenty\Modules\Warehouse\Models;


/**
 * The warehouse location model.
 */
abstract class WarehouseLocation 
{

	const MAX_ITEMS_PER_PAGE = 100;

	const MAX_CHARACTERS_NOTES = 500;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$levelId;
	public		$label;
	public		$purposeKey;
	public		$statusKey;
	public		$position;
	public		$fullLabel;
	public		$type;
	public		$notes;
	public		$createdAt;
	public		$updatedAt;
	public		$warehouseLocationLevel;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}