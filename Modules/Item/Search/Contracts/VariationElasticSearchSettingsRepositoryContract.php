<?php
namespace Plenty\Modules\Item\Search\Contracts;

use Plenty\Modules\Item\Search\Models\LanguageSettings;
use Plenty\Modules\Item\Search\Models\SearchSettings;

/**
 * Read and update search settings
 */
interface VariationElasticSearchSettingsRepositoryContract 
{

	/**
	 * Get language settings
	 */
	public function getLanguages(
	):LanguageSettings;

	/**
	 * Update language settings
	 */
	public function saveLanguages(
		array $data
	):LanguageSettings;

	/**
	 * Get search settings
	 */
	public function getSearchSettings(
	):SearchSettings;

	/**
	 * Update search settings
	 */
	public function saveSearchSettings(
		array $data
	):SearchSettings;

}