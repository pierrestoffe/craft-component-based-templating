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

namespace pierrestoffe\componentbasedtemplating;

use Craft;
use craft\base\Plugin;
use pierrestoffe\componentbasedtemplating\models\Settings;
use pierrestoffe\componentbasedtemplating\services\ComponentsService;
use pierrestoffe\componentbasedtemplating\twigextensions\ComponentBasedTemplatingTwigExtension;

/**
 * @author    Pierre Stoffe
 *
 * @since     1.0.0
 *
 * @property ComponentsService ComponentsService
 */
class ComponentBasedTemplating extends Plugin
{
    // Static Properties
    // =========================================================================

    /**
     * @var ComponentBasedTemplating
     */
    public static $plugin;

    // Public Methods
    // =========================================================================

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();

        Craft::$app->view->registerTwigExtension(new ComponentBasedTemplatingTwigExtension());
    }

    // Protected Methods
    // =========================================================================

    /**
     * {@inheritdoc}
     */
    protected function createSettingsModel(): ?craft\base\Model
    {
        return new Settings();
    }
}
