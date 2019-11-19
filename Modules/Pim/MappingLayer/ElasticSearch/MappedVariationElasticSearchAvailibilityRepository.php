<?php
namespace Plenty\Modules\Pim\MappingLayer\ElasticSearch;

use Plenty\Modules\Cloud\ElasticSearch\Repositories\ElasticSearchAvailabilityRepository;
use Plenty\Modules\Pim\SearchService\Index\Index;

/**
 * VariationElasticSearchAvailibilityRepository
 */
abstract class MappedVariationElasticSearchAvailibilityRepository 
{

	abstract public function isReady(
	):bool;

	abstract public function isAvailable(
	):bool;

}