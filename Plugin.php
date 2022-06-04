<?php namespace PMK\Redirect;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            '\PMK\Redirect\Components\RedirectInternal' => 'redirectInternal',
            '\PMK\Redirect\Components\RedirectExternal' => 'redirectExternal'
        ];
    }

    public function registerSettings()
    {
    }
}
