<?php
namespace Plenty\Modules\Item\Property\Models;


/**
 * The PropertyItem including PropertyItemName and PropertyMarketComponent
 */
abstract class PropertyItem 
{
	public		$id;
	public		$position;
	public		$unit;
	public		$propertyGroupId;
	public		$imageName;
	public		$backendName;
	public		$valueType;
	public		$searchable;
	public		$orderProperty;
	public		$showItem;
	public		$showItemList;
	public		$displayCheckout;
	public		$displayPdf;
	public		$backendNote;
	public		$surcharge;
	public		$displayAsAdditionalCosts;
	public		$names;
	public		$marketComponents;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}