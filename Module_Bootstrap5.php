<?php
namespace GDO\Bootstrap5;

use GDO\Core\GDO_Module;
use GDO\Javascript\Module_Javascript;

/**
 * Bootstrap5 assets.
 * 
 * @author gizmore
 * @version 6.10.4
 * @since 6.10.4
 */
final class Module_Bootstrap5 extends GDO_Module
{
    public $module_priority = 25;

    ##############
    ### Assets ###
    ##############
    public function onIncludeScripts()
    {
        $min = Module_Javascript::instance()->jsMinAppend();
        $this->addBowerCSS("bootstrap/dist/css/bootstrap{$min}.css");
        $this->addBowerJavascript("bootstrap/dist/js/bootstrap{$min}.js");
    }
    
}
