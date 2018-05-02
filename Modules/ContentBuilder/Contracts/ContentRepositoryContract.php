<?php
namespace Plenty\Modules\ContentBuilder\Contracts;

use Illuminate\Support\Collection;
use Plenty\Modules\ContentBuilder\Models\Content;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * Get and create contents.
 */
interface ContentRepositoryContract 
{

	/**
	 * List contents with pagination
	 */
	public function listContents(
		int $page = 1, 
		int $itemsPerPage = 50, 
		array $with = [], 
		array $filters = []
	):PaginatedResult;

	/**
	 * List contents
	 */
	public function listAllContents(
	):array;

	/**
	 * Get a content
	 */
	public function getContent(
		int $contentId
	);

	/**
	 * Get all contents for a content page references by its identifier
	 */
	public function getContentsByPage(
		string $pageIdentifier
	):Collection;

	/**
	 * Create a new content
	 */
	public function createContent(
		string $dataProviderName
	);

	/**
	 * Update a content
	 */
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