<?php
namespace Plenty\Modules\ContentBuilder\Contracts;

use Illuminate\Support\Collection;
use Plenty\Modules\ContentBuilder\Models\Content;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * This module is deprecated. Use module 'Shop Builder' instead.
 */
interface ContentRepositoryContract 
{

	public function listContents(
		int $page = 1, 
		int $itemsPerPage = 50, 
		array $with = [], 
		array $filters = []
	):PaginatedResult;

	public function listAllContents(
	):array;

	public function getContent(
		int $contentId
	);

	public function getContentsByPage(
		string $pageIdentifier
	):Collection;

	public function createContent(
		string $dataProviderName
	);

	public function updateContent(
		array $data, 
		int $contentId
	);

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