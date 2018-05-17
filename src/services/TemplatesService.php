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

/**
 * @author    Pierre Stoffe
 *
 * @since     1.0.0
 */
class TemplatesService extends Component
{
    // Public Methods
    // =========================================================================

    /**
     * Find and render the appropriate template file.
     *
     * @param string $method
     * @param array  $variables
     * @param string $name
     * @param string $templatePath
     *
     * @return string|false
     */
    public function getTemplate($method, $variables, $name, $templatePath)
    {
        $view = Craft::$app->view;

        // Turn the camelCase component/group name into a kebab-case string
        $fileName = $this->_camelCaseToKebab($method);

        // Try and find the requested template
        $templateName = "{$templatePath}/{$fileName}";
        $templatePath = $view->doesTemplateExist($templateName);

        // Return and show Exception if template is not defined
        if (!$templatePath) {
            Craft::error("Could not find {$templatePath} file.", __METHOD__);

            return false;
        }

        // Get parameters
        $parameters = array();
        if (count($variables)) {
            $parameters = $variables[0];
        }

        return $view->renderTemplate($templateName, $parameters);
    }

    // Private Methods
    // =========================================================================

    /**
     * Convert a camelCase string into a kebab-case string.
     *
     * @param string $string
     *
     * @return string
     */
    private function _camelCaseToKebab($string)
    {
        return strtolower(preg_replace('/(?<!^)[A-Z]/', '-$0', $string));
    }
}
