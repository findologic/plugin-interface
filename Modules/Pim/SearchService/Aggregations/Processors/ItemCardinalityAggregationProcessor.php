<?php
namespace Plenty\Modules\Pim\SearchService\Aggregations\Processors;

use Plenty\Modules\Cloud\ElasticSearch\Lib\Processor\BaseProcessor;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Source\Condition\ConditionInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Source\Mutator\MutatorInterface;

/**
 * To be written
 */
abstract class ItemCardinalityAggregationProcessor 
{

	abstract public function process(
		 $data
	);

	abstract public function getDependencies(
	):array;

	abstract public function addMutator(
		MutatorInterface $mutator
	):self;

	abstract public function addCondition(
		ConditionInterface $conditions
	):self;

}