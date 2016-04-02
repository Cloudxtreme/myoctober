<?php namespace Sysdoc\BetaSignup;

use Backend;
use System\Classes\PluginBase;

/**
 * BetaSignup Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'BetaSignup',
            'description' => 'Track Beta Signups for Sysdoc',
            'author'      => 'Sysdoc',
            'icon'        => 'icon-bar-chart-o'
        ];
    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Sysdoc\BetaSignup\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
   // Remove this line to activate

        return [
            'sysdoc.betasignup.some_permission' => [
                'tab' => 'BetaSignup',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
         // Remove this line to activate

        return [
            'betasignup' => [
                'label'       => 'Beta Signups',
                'url'         => Backend::url('sysdoc/betasignup/signups'),
                'icon'        => 'icon-leaf',
                'permissions' => ['sysdoc.betasignup.*'],
                'order'       => 500,
            ],
        ];
    }

}
