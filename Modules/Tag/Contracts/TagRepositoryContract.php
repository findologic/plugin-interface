<?php
namespace Plenty\Modules\Tag\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Collection;
use Plenty\Modules\Tag\Models\Tag;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;

/**
 * The TagRepositoryContract is the interface for the tag repository.
 */
interface TagRepositoryContract 
{

	/**
	 * Create a new tag.
	 */
	public function create(
		string $name
	):Tag;

	/**
	 * Update a tag.
	 */
	public function update(
		array $data, 
		int $tagId
	):Tag;

	/**
	 * Deletes a tag by given tagId
	 */
	public function delete(
		int $tagId
	);

	public function getTagByName(
		string $name
	):Tag;

	public function getTagsByIds(
		array $ids
	):array;

	public function getTagById(
		int $id
	):Tag;

	public function getTagsByAvailability(
		string $availabilityType
	):array;

	/**
	 * Returns all tags
	 */
	public function listTags(
	):Collection;

	/**
	 * Creates a new tag
	 */
	public function createTag(
		array $data
	):Tag;

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