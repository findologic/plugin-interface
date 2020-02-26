<?php
namespace Plenty\Modules\Webshop\ItemSearch\Contracts;

use Plenty\Modules\Cloud\ElasticSearch\Lib\Search\Aggregation\AggregationInterface;

/**
 * FacetExtension interface
 */
interface FacetExtension 
{

	public function getAggregation(
	):AggregationInterface;

	public function mergeIntoFacetsList(
		 $result
	):array;

	public function extractFilterParams(
		 $filtersList
	);

}