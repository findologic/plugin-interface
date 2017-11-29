<?php
namespace Plenty\Modules\EventProcedures\Services\Entries;


/**
 * The filter entry contains all information needed to use module filters in plentymarkets event procedures.
 */
abstract class FilterEntry 
{

	const EVENT_TYPE_ORDER = 'order';

	const EVENT_TYPE_REORDER = 'reorder';

	const EVENT_TYPE_TICKET = 'ticket';

	abstract public function getModuleName(
	):string;

	abstract public function setModuleName(
		string $moduleName
	):FilterEntry;

	abstract public function getEventType(
	):string;

	abstract public function setEventType(
		string $eventType
	):FilterEntry;

	abstract public function getFilterNames(
	):array;

	abstract public function setFilterNames(
		array $filterNames
	):FilterEntry;

	abstract public function getFilterClass(
	):string;

	abstract public function setFilterClass(
		string $filterClass
	):FilterEntry;

}