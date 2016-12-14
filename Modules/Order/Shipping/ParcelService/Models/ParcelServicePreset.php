<?php
namespace Plenty\Modules\Order\Shipping\ParcelService\Models;


/**
 * The Parcel Service Preset Model
 */
abstract class ParcelServicePreset 
{
	public		$id;
	public		$parcelServiceId;
	public		$backendName;
	public		$flag;
	public		$priority;
	public		$category;
	public		$useArticlePorto;
	public		$isInsured;
	public		$isExpress;
	public		$isPostident;
	public		$isDefaultEnabled;
	public		$islandFee;
	public		$supportedMultishop;
	public		$supportedReferrer;
	public		$subreferrerSupport;
	public		$excludedPaymentMethods;
	public		$excludedCustomerGroups;
	public		$shippingGroup;
	public		$dispatchIdentifier;
	public		$auctionType;
	public		$supportedLoyaltyPrograms;
	public		$updatedAt;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}