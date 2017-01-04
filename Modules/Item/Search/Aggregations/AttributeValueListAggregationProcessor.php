<?php
namespace Plenty\Modules\Item\Search\Aggregations;

use Plenty\Modules\Cloud\ElasticSearch\Lib\Processor\AggregationProcessor;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Source\Mutator\MutatorInterface;

/**
 * To be written
 */
abstract class AttributeValueListAggregationProcessor 
{

	abstract public function process(
		array $data
	):array;

	abstract public function getName(
	):string;

	abstract public function getDependencies(
	):array;

	abstract public function addMutator(
		MutatorInterface $mutator
	):BaseProcessor;

}