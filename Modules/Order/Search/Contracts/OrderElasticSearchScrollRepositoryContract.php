<?php
namespace Plenty\Modules\Order\Search\Contracts;

use Plenty\Modules\Cloud\ElasticSearch\Contracts\ElasticSearchScrollRepositoryContract;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Index\IndexInterface;

/**
 * ...
 */
interface OrderElasticSearchScrollRepositoryContract 
{

	public function hasNext(
	):bool;

	public function setNumberOfDocumentsPerShard(
		int $size
	);

	public function setIndex(
		IndexInterface $index
	):ElasticSearchSearchRepositoryContract;

	public function addSearch(
		 $search
	):ElasticSearchSearchRepositoryContract;

	public function execute(
	):array;

}