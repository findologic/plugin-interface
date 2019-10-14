<?php
namespace Plenty\Modules\Pim\SearchService\Aggregations\Price;

use Plenty\Modules\Cloud\ElasticSearch\Lib\Search\Aggregation\AggregationInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Search\Aggregation\Object\ObjectAggregation;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Source\SourceInterface;

/**
 * To be written
 */
abstract class PriceRangeAggregation implements AggregationInterface

{

	const NAME = 'priceRange';

	abstract public function getName(
	);

	abstract public function setPriceIds(
		array $ids
	);

	abstract public function process(
		array $data
	):array;

	abstract public function getAggregation(
	);

	abstract public function toArray(
	):array;

	abstract public function addAggregation(
		AggregationInterface $aggregation
	);

	abstract public function addSource(
		SourceInterface $source
	):AggregationInterface;

	abstract public function setPage(
		int $page, 
		int $rowsPerPage
	):AggregationInterface;

	abstract public function getSources(
	);

}