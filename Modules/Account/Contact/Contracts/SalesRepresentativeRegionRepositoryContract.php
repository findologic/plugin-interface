<?php
namespace Plenty\Modules\Account\Contact\Contracts;

use Illuminate\Support\Collection;
use Plenty\Modules\Account\Models\SalesRepresentativeRegion;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * Sales representatives region repository
 */
interface SalesRepresentativeRegionRepositoryContract 
{

	public function createRegion(
		array $data, 
		int $contactId = null, 
		int $accountId = null
	):SalesRepresentativeRegion;

	public function find(
		int $page = 1, 
		int $itemsPerPage = 50, 
		array $columns = [], 
		array $with = []
	):PaginatedResult;

	public function getRegionById(
		int $accountContactRelationId
	):SalesRepresentativeRegion;

	public function deleteRegionById(
		int $accountContactRelationId
	):bool;

	public function updateRegionById(
		int $accountContactRelationId, 
		array $data
	):SalesRepresentativeRegion;

	public function getRegionByContactAndAccountId(
		int $contactId, 
		int $accountId
	):SalesRepresentativeRegion;

	public function getRegionsByContactId(
		int $contactId
	):Collection;

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