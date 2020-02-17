<?php
namespace Plenty\Modules\Report\KeyFigure\Contracts;

use Plenty\Modules\Report\KeyFigure\Models\KeyFigureResultSearchResponse;
use Plenty\Modules\Report\KeyFigure\Models\KeyFigureSearchRequests;

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