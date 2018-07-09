<?php
namespace Plenty\Modules\Listing\Market\ItemSpecific\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Listing\Market\ItemSpecific\Models\ListingMarketItemSpecific;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Contracts\ExtendsCriteriaContract;
use Plenty\Repositories\Criteria\Criteria;
use Zend\Form\Annotation\Type;

/**
 * The contract of the listing market item specific repository
 */
interface ListingMarketItemSpecificRepositoryContract 
{

	/**
	 * Gets a ListingMarketItemSpecific.
	 */
	public function get(
		int $id
	):ListingMarketItemSpecific;

	/**
	 * Gets all ListingMarketItemSpecifics.
	 */
	public function search(
		array $data, 
		int $page = 1, 
		int $itemsPerPage = 50
	):ListingMarketItemSpecific;

	/**
	 * Updates a ListingMarketItemSpecific.
	 */
	public function update(
		int $id, 
		array $data
	):ListingMarketItemSpecific;

	/**
	 * Deletes a ListingMarketItemSpecific.
	 */
	public function delete(
		int $id
	):bool;

	/**
	 * Resets all Criteria filters by creating a new instance of the builder object.
	 */
	public function clearCriteria(
	);

	/**
	 * Applies criteria classes to the current repository.
	 */
	public function applyCriteriaFromFilters(
	);

	/**
	 * Sets the filter array.
	 */
	public function setFilters(
		array $filters = []
	);

	/**
	 * Returns the filter array.
	 */
	public function getFilters(
	);

	/**
	 * Returns a collection of parsed filters as Condition object
	 */
	public function getConditions(
	);

	/**
	 * Clears the filter array.
	 */
	public function clearFilters(
	);

}