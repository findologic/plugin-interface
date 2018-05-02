<?php
namespace Plenty\Modules\ContentBuilder\Contracts;


/**
 * Widget interface
 */
interface Widget 
{

	/**
	 * Get the html representation of the widget
	 */
	public function getPreview(
		array $widgetSettings = [], 
		array $children = []
	):string;

	/**
	 * Render the widget
	 */
	public function render(
		array $widgetSettings = [], 
		array $children = []
	):string;

}