<?php

namespace Plenty\Modules\Webshop\ItemSearch\Helpers;

use Plenty\Modules\Plugin\Annotations\PluginTrait;
use Plenty\Plugin\Data\Contracts\Resources;
use Plenty\Plugin\Log\LoggerFactory;

/**
 * Trait LoadResultFields
 *
 * @package Plenty\Modules\Webshop\ItemSearch\Helpers
 * @PluginTrait(description="Load result fields trait")
 * @since 0.4.0
 */
trait LoadResultFields
{
    /**
     * @param string $fullTemplateName
     * @return array
     * @throws \Exception
     * @since 0.4.0
     */
    private function loadResultFields($fullTemplateName): array
    {
        /** @var Resources $resource */
        $resource = pluginApp(Resources::class);

        $resourcePath = explode('::', $fullTemplateName);
        $resourceName = $resourcePath[0] . '::views/' . str_replace('.', '/', $resourcePath[1]);
        if ($resource->exists($resourceName . '.fields')) {
            return $resource->load($resourceName . '.fields')->getData();
        }

        return [];
    }
}
