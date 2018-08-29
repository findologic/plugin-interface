<?php
namespace Plenty\Modules\Catalog\Contracts;

use Plenty\Modules\Catalog\Models\Catalog;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * To be written
 */
interface CatalogRepositoryContract 
{

	public function create(
		array $data
	):Catalog;

	public function get(
		string $id
	):Catalog;

	public function delete(
		string $id
	):bool;

	public function all(
		int $page = 1, 
		int $perPage = 25
	):PaginatedResult;

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