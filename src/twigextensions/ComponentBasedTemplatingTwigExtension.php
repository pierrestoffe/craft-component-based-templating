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

namespace pierrestoffe\componentbasedtemplating\twigextensions;

use Craft;
use pierrestoffe\componentbasedtemplating\ComponentBasedTemplating;
use pierrestoffe\componentbasedtemplating\services\ComponentsService;
use pierrestoffe\componentbasedtemplating\services\GroupsService;
use Twig\Extension\AbstractExtension;
use Twig\Extension\GlobalsInterface;

/**
 * @author    Pierre Stoffe
 *
 * @since     1.0.0
 */
class ComponentBasedTemplatingTwigExtension extends AbstractExtension implements GlobalsInterface
{
    // Public Methods
    // =========================================================================

    /**
     * @var ComponentBasedTemplating
     */
    public function getGlobals(): array
    {
        $componentsName = ComponentBasedTemplating::getInstance()->getSettings()->componentsName;
        $groupsName = ComponentBasedTemplating::getInstance()->getSettings()->groupsName;

        return [
            $componentsName => new ComponentsService(),
            $groupsName => new GroupsService(),
        ];
    }
}
