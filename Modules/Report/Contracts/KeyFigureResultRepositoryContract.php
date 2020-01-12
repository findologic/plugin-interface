<?php
namespace Plenty\Modules\Report\Contracts;

use Plenty\Modules\Report\Models\KeyFigureResultSearchResponse;
use Plenty\Modules\Report\Models\KeyFigureSearchRequests;

/**
 * This interface allows you to search for key figures results.
 */
interface KeyFigureResultRepositoryContract 
{

	/**
	 * Search for key figure calculation results
	 */
	public function searchKeyFigureResults(
		KeyFigureSearchRequests $searchRequests
	):KeyFigureResultSearchResponse;

}