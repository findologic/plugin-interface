<?php
namespace Plenty\Modules\Webshop\ItemSearch\Helpers;

use Plenty\Modules\Cloud\ElasticSearch\Lib\Data\Update\Handler\Traits\MultilingualTrait;
use Plenty\Modules\Webshop\Contracts\LocalizationRepositoryContract;
use Plenty\Modules\Webshop\ItemSearch\Factories\VariationSearchFactory;
use Plenty\Modules\Webshop\Template\Contracts\TemplateConfigRepositoryContract;

/**
 * Sorting Helper
 */
abstract class SortingHelper 
{

	const SORTING_MAP = ['filter.itemId','analyzed.multilingual.{{lang}}.name1.sorting','analyzed.multilingual.{{lang}}.name2.sorting','analyzed.multilingual.{{lang}}.name3.sorting','filter.timestamps.createdAt','filter.timestamps.updatedAt','variationId','analyzed.number.sorting','filter.availabilityAverageDays','filter.position','analyzed.externalManufacturer.sorting','analyzed.manufacturer.sorting','filter.stock.net','filter.prices.price'];

	/**
	 * Get sorting values from plugin configuration
	 */
	abstract public function getSorting(
		string $sortingConfig = null, 
		bool $isCategory = true
	):array;

	/**
	 * Get sorting values for categories from config
	 */
	abstract public function getCategorySorting(
		string $sortingConfig = null
	):array;

	/**
	 * Get sorting values for searches from config
	 */
	abstract public function getSearchSorting(
		string $sortingConfig = null
	):array;

	abstract public function getUsedItemName(
	):string;

	abstract public function splitPathAndOrder(
		 $sorting
	);

	abstract public static function isLanguageSupported(
		string $lang
	):bool;

	abstract public static function isLanguageActivated(
		string $lang
	):bool;

	abstract public static function getM10lByLanguage(
		string $lang, 
		string $fallback = "en"
	):string;

	abstract public static function getLanguageByM10l(
		string $lang, 
		string $fallback = "english"
	):string;

}