<?php
namespace Plenty\Modules\LiveShopping\Contracts;


/**
 * Interface for Live Shopping
 */
interface LiveShoppingRepositoryContract 
{

	public function getLiveShopping(
		int $liveShoppingId
	);

	public function getActiveByItemId(
		int $itemId
	);

	public function getActive(
		int $liveShoppingId
	);

	public function getNextActive(
		int $liveShoppingId
	);

	public function getLastExpired(
		int $liveShoppingId
	);

	public function getRecentlyStartedOrExpired(
		int $time, 
		int $interval
	);

	public function itemHasActiveLiveShopping(
		int $itemId
	):bool;

}