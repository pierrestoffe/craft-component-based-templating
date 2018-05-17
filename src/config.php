<?php
/**
 * Component-based Templating plugin for Craft CMS 3.x
 *
 * Templating in a component-based environment
 *
 * @link      https://pierrestoffe.be
 * @copyright Copyright (c) 2018 Pierre Stoffe
 */

 /**
  * This file exists only as a template for the Component-based Templating settings.
  * It does nothing on its own.
  *
  * Don't edit this file, instead copy it to 'craft/config' as 'component-based-templating.php'
  * and make your changes there to override default settings.
  *
  * Once copied to 'craft/config', this file will be multi-environment aware as
  * well, so you can have different settings groups for each environment, just as
  * you do for 'general.php'
  */

return [
    // The name of the global variable used to call components in the templates
    'componentsName' => 'components',
    
    // The directory where the component files are kept
    'componentsPath' => '_components',
    
    // The name of the global variable used to call groups in the templates
    'groupsName' => 'groups',
    
    // The directory where the group files are kept
    'groupsPath' => '_groups'
];