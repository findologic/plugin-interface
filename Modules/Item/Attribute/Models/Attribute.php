<?php
namespace Plenty\Modules\Item\Attribute\Models;


/**
 * The Attribute model including AttributeName and AttributeValue
 */
abstract class Attribute 
{
	public		$id;
	public		$backendName;
	public		$position;
	public		$isSurchargePercental;
	public		$isLinkableToImage;
	public		$amazonAttribute;
	public		$fruugoAttribute;
	public		$pixmaniaAttribute;
	public		$ottoAttribute;
	public		$googleShoppingAttribute;
	public		$neckermannAtEpAttribute;
	public		$typeOfSelectionInOnlineStore;
	public		$laRedouteAttribute;
	public		$isGroupable;
	public		$attributeNames;
	public		$values;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}