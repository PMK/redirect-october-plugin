<?php namespace PMK\Redirect\Classes;

use Cms\Classes\ComponentBase;
use Cms\Classes\Controller;
use Cms\Classes\Page;

abstract class RedirectComponent extends ComponentBase
{

    public function onRun()
    {
        $url = "";

        if ($this->property('redirectInternal') !== null) {
            $url = Page::url($this->property('redirectInternal'));
        }

        if ($this->property('redirectExternal') !== null) {
            $url = $this->property('redirectExternal');
        }

        if (!!strlen($url)) {
            header("Location: " . $url);
            exit;
        }
    }

}
