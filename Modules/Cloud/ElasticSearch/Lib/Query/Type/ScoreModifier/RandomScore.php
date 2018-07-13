<?php
namespace Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\ScoreModifier;

use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\TypeInterface;

/**
 * to be written
 */
abstract class RandomScore implements TypeInterface

{

	abstract public function getFunction(
	):array;

	abstract public function getSeed(
	):string;

	abstract public function setSeed(
		string $seed
	):RandomScore;

	abstract public function toArray(
	);

}