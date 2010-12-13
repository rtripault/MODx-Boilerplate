<?php
/**
 * MODx Boilerplate
 *
 * Copyright 2010 by Romain Tripault // Melting Media <romain@melting-media.com>
 *
 * @package modxboilerplate
 */
/**
 * Creates default templates
 *
 * @package modxboilerplate 
 * @subpackage build
 */

$templates = array();

$templates[0]= $modx->newObject('modTemplate');
$templates[0]->fromArray(array(
    'id' => 2,
    'templatename' => 'RSS Feed',
    'description' => 'RSS Feed Template.',
    'content' => file_get_contents($sources['data'].'templates/template.rss.tpl'),
),'',true,true);

$templates[1]= $modx->newObject('modTemplate');
$templates[1]->fromArray(array(
    'id' => 3,
    'templatename' => 'MODx Boilerplate',
    'description' => 'Starting point tpl',
    'content' => file_get_contents($sources['data'].'templates/template.tpl'),
),'',true,true);

$templates[2]= $modx->newObject('modTemplate');
$templates[2]->fromArray(array(
    'id' => 4,
    'templatename' => 'Master.css',
    'description' => 'Dummy tpl for CSS',
    'content' => '[[*content]]',
),'',true,true);

return $templates;