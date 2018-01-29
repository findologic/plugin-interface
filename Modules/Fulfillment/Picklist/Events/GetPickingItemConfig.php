<?php
namespace Plenty\Modules\Fulfillment\Picklist\Events;


/**
 * This event will be triggered, when an item is picked
 */
abstract class GetPickingItemConfig 
{

	abstract public function getPickingOrderItemId(
	):int;

	abstract public function getProcessUserId(
	):int;

	abstract public function addPluginConfig(
		string $identifier, 
		 $pluginConfig
	):self;

	abstract public function getPluginConfigs(
	):array;

}