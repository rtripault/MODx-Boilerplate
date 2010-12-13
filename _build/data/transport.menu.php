<?php
/**
 * MODx Boilerplate
 *
 * Copyright 2010 by Romain Tripault // Melting Media <romain@melting-media.com>
 *
 * @package modxboilerplate
 */
/**
 * Creates dummy menu in components
 *
 * @package modxboilerplate 
 * @subpackage build
 */

$action = $modx->newObject('modAction');
$action->fromArray(array(
    'id' => 1,
    'namespace' => 'modxboilerplate',
    'parent' => 0,
    'controller' => 'index',
    'haslayout' => 1,
    'lang_topics' => 'modxboilerplate:default',
    'assets' => '',
),'',true,true);

/* load action into menu */
$menu = $modx->newObject('modMenu');
$menu->fromArray(array(
    'text' => 'mbp.modxboilerplate',
    'parent' => 'components',
    'description' => 'mbp.modxboilerplate_desc',
    'icon' => 'images/icons/plugin.gif',
    'menuindex' => 0,
    'params' => '',
    'handler' => '',
),'',true,true);
$menu->addOne($action);
unset($action);

return $menu;