<?php
namespace Plenty\Modules\Item\Attribute\Models;


/**
 * The AttributeValue model including Attribute and AttributeValueName
 */
abstract class AttributeValue 
{
	public		$id;
	public		$attributeId;
	public		$backendName;
	public		$position;
	public		$image;
	public		$comment;
	public		$amazonValue;
	public		$ottoValue;
	public		$neckermannAtEpValue;
	public		$laRedouteValue;
	public		$tracdelightValue;
	public		$percentageDistribution;
	public		$attribute;
	public		$valueNames;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}