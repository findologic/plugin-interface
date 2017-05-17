<?php
namespace Plenty\Modules\Cloud\ElasticSearch\Lib\Source;


/**
 * foo
 */
abstract class ExcludeSource implements \Plenty\Modules\Cloud\ElasticSearch\Lib\Source\SourceInterface

{

	abstract public function toArray(
	):array;

	abstract public function getPrefix(
	):string;

	abstract public function activateAll(
	):\Plenty\Modules\Cloud\ElasticSearch\Lib\Source\SourceInterface;

	abstract public function activateList(
		array $fields
	):self;

}