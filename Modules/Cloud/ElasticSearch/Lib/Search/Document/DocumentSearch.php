<?php
namespace Plenty\Modules\Cloud\ElasticSearch\Lib\Search\Document;

use Plenty\Modules\Cloud\ElasticSearch\Lib\Processor\ProcessorInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Search\BaseSearch;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\TypeInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Source\SourceInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Sorting\SortingInterface;

/**
 * foo
 */
abstract class DocumentSearch 
{

	abstract public function getType(
	):string;

	abstract public function toArray(
	):array;

	abstract public function process(
		array $data
	):array;

	abstract public function getQuery(
	):array;

	abstract public function getSources(
	);

	abstract public function addFilter(
		TypeInterface $filter
	):BaseSearch;

	abstract public function addSource(
		SourceInterface $source
	):BaseSearch;

	abstract public function setSorting(
		SortingInterface $sorting
	):BaseSearch;

	abstract public function setPage(
		int $page, 
		int $rowsPerPage
	):BaseSearch;

}