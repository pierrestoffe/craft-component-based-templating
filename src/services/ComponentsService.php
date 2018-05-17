<?php
/**
 * Component-based Templating plugin for Craft CMS 3.x.
 *
 * Templating in a component-based environment
 *
 * @see https://pierrestoffe.be
 *
 * @copyright Copyright (c) 2018 Pierre Stoffe
 */

namespace pierrestoffe\componentbasedtemplating\services;

use Craft;
use craft\base\Component;
use pierrestoffe\componentbasedtemplating\ComponentBasedTemplating;

/**
 * @author    Pierre Stoffe
 *
 * @since     1.0.0
 */
class ComponentsService extends Component
{
    // Public Methods
    // =========================================================================

    /**
     * @param string $method
     * @param array  $variables
     *
     * @return @void
     */
    public function __call($method, $variables)
    {
        $name = ComponentBasedTemplating::getInstance()->getSettings()->componentsName;
        $templatePath = ComponentBasedTemplating::getInstance()->getSettings()->componentsPath;

        $templatesService = new TemplatesService();

        echo $templatesService->getTemplate($method, $variables, $name, $templatePath);
    }
}
