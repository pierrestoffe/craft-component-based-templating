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

namespace pierrestoffe\componentbasedtemplating\models;

use craft\base\Model;

/**
 * @author    Pierre Stoffe
 *
 * @since     1.0.0
 */
class Settings extends Model
{
    // Public Properties
    // =========================================================================

    /**
     * The name of the global variable used to call components in the templates.
     *
     * @var array
     */
    public $componentsName = 'components';

    /**
     * The directory where the component files are kept.
     *
     * @var array
     */
    public $componentsPath = '_components';

    /**
     * The name of the global variable used to call groups in the templates.
     *
     * @var array
     */
    public $groupsName = 'groups';

    /**
     * The directory where the group files are kept.
     *
     * @var array
     */
    public $groupsPath = '_groups';

    // Public Methods
    // =========================================================================

    /**
     * {@inheritdoc}
     */
    public function rules(): array
    {
        return [
            ['componentsName', 'string'],
            ['componentsName', 'default', 'value' => 'components'],

            ['componentsPath', 'string'],
            ['componentsPath', 'default', 'value' => '_components'],

            ['groupsName', 'string'],
            ['groupsName', 'default', 'value' => 'groups'],

            ['groupsPath', 'string'],
            ['groupsPath', 'default', 'value' => '_groups'],
        ];
    }
}
