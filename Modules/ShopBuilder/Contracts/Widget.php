<?php
namespace Plenty\Modules\ShopBuilder\Contracts;


/**
 * Contract for content widgets
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