<?php
namespace Plenty\Modules\Cloud\ElasticSearch\Lib\Collapse;


/**
 * foo
 */
abstract class BaseCollapse implements CollapseInterface

{

	abstract public function toArray(
	):array;

}