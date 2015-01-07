<?php namespace PMK\Redirect;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{

    public function pluginDetails()
    {
        return [
            'name'        => 'Redirect',
            'description' => 'Plugin for October CMS to redirect a page to an internal page, or to an external url, by adding a component.',
            'author'      => 'Patrick Klaassen',
            'icon'        => 'icon-hand-o-right',
            'homepage'    => 'https://github.com/PMK/redirect-october-plugin'
        ];
    }

    public function registerComponents()
    {
        return [
            '\PMK\Redirect\Components\RedirectInternal' => 'redirect',
            '\PMK\Redirect\Components\RedirectExternal' => 'redirect'
        ];
    }

}
