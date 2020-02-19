<?php
namespace Plenty\Modules\Pim\SearchService\Aggregations\Feedback;

use Plenty\Modules\Cloud\ElasticSearch\Lib\Search\Aggregation\AggregationInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Search\Aggregation\Object\ObjectRangeAggregation;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Source\SourceInterface;

/**
 * To be written
 */
abstract class FeedbackRangeAggregation implements AggregationInterface

{

	const NAME = 'feedback';

	abstract public function getName(
	):string;

	abstract public function getField(
	):string;

	abstract public function getRanges(
	);

	abstract public function getAggregation(
	);

	abstract public function toArray(
	):array;

	abstract public function process(
		array $data
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