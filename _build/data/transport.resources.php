<?php
/**
 * MODx Boilerplate
 *
 * Copyright 2010 by Romain Tripault // Melting Media <romain@melting-media.com>
 *
 * @package modxboilerplate
 */
/**
 * Creates default resources
 *
 * @package modxboilerplate 
 * @subpackage build
 */

$resources = array();
$src = $sources['data'].'resources/s/';

$resources[1] = $modx->newObject('modResource');
$resources[1]->fromArray(array(
    'id' => 1,
    'parent' => 0,
    'template' => 3,
    'pagetitle' => 'home',
    'longtitle' => '',
    'description' => 'homepage',
    'introtext' => '',
    'alias' => '',
    'link_attributes' => '',
    'content' => "<p>MODx Boilerplate successfully installed : now let's build some prototype!</p>",
    'isfolder' => false,
    'published' => true,
    'hidemenu' => false,
    'searchable' => true,
    'cacheable' => true,
    'richtext' => true,
    'context_key' => 'web',
    'menuindex' => 0,
    'menutitle' => '',
),'',true,true);

$resources[11] = $modx->newObject('modResource');
$resources[11]->fromArray(array(
    'id' => 11,
    'parent' => 0,
    'template' => 0,
    'pagetitle' => 's',
    'longtitle' => '',
    'description' => 'system files', /* check if lexicon is usable */
    'introtext' => '',
    'alias' => 's',
    'link_attributes' => '',
    'content' => file_get_contents($src.'empty.tpl'),
    'isfolder' => true,
    'published' => true,
    'hidemenu' => true,
    'searchable' => false,
    'cacheable' => true,
    'richtext' => false,
    'context_key' => 'web',
    'menuindex' => 0,
    'menutitle' => '',
),'',true,true);

$resources[2] = $modx->newObject('modResource');
$resources[2]->fromArray(array(
    'id' => 2,
    'parent' => 11,
    'template' => 3,
    'pagetitle' => '403',
    'longtitle' => '',
    'description' => '',
    'introtext' => '',
    'alias' => '403',
    'link_attributes' => '',
    'content' => file_get_contents($src.'403.tpl'),
    'isfolder' => false,
    'published' => true,
    'hidemenu' => true,
    'cacheable' => false,
    'searchable' => false,
    'richtext' => false,
    'context_key' => 'web',
    'menuindex' => 1,
    'menutitle' => '',
),'',true,true);

$resources[3] = $modx->newObject('modResource');
$resources[3]->fromArray(array(
    'id' => 3,
    'parent' => 11,
    'template' => 3,
    'pagetitle' => '404',
    'longtitle' => '',
    'description' => '',
    'introtext' => '',
    'alias' => '404',
    'link_attributes' => '',
    'content' => file_get_contents($src.'404.tpl'),
    'isfolder' => false,
    'published' => true,
    'hidemenu' => true,
    'cacheable' => false,
    'searchable' => false,
    'richtext' => false,
    'context_key' => 'web',
    'menuindex' => 2,
    'menutitle' => '',
),'',true,true);

$resources[4] = $modx->newObject('modResource');
$resources[4]->fromArray(array(
    'id' => 4,
    'parent' => 11,
    'template' => 3,
    'pagetitle' => 'legal',
    'longtitle' => '[[++site_name]] - legal infos',
    'description' => '',
    'introtext' => '',
    'alias' => 'legal',
    'link_attributes' => '',
    'content' => file_get_contents($src.'legal.tpl'),
    'isfolder' => false,
    'published' => true,
    'hidemenu' => false,
    'cacheable' => true,
    'searchable' => true,
    'richtext' => false,
    'context_key' => 'web',
    'menuindex' => 3,
    'menutitle' => '',
),'',true,true);

$resources[5] = $modx->newObject('modResource');
$resources[5]->fromArray(array(
    'id' => 5,
    'parent' => 11,
    'template' => 4,
    'pagetitle' => 'master.css',
    'longtitle' => '',
    'description' => '',
    'introtext' => '',
    'alias' => 'master',
    'link_attributes' => '',
    'content' => file_get_contents($src.'master.css.tpl'),
    'isfolder' => false,
    'published' => true,
    'hidemenu' => true,
    'searchable' => false,
    'cacheable' => false,
    'richtext' => false,
    'context_key' => 'web',
    'menuindex' => 4,
    'menutitle' => '',
    'content_type' => 4,
    'contentType' => 'text/css',
),'',true,true);

$resources[6] = $modx->newObject('modResource');
$resources[6]->fromArray(array(
    'id' => 6,
    'parent' => 11,
    'template' => 3,
    'pagetitle' => 'offline',
    'longtitle' => '[[++site_name]] is currently offline',
    'description' => '',
    'introtext' => '',
    'alias' => 'offline',
    'link_attributes' => '',
    'content' => file_get_contents($src.'offline.tpl'),
    /*'publishedon' => time(),*/
    'isfolder' => false,
    'published' => true,
    'hidemenu' => true,
    'searchable' => false,
    'cacheable' => true,
    'richtext' => false,
    'context_key' => 'web',
    'menuindex' => 0,
    'menutitle' => '',
),'',true,true);

$resources[7] = $modx->newObject('modResource');
$resources[7]->fromArray(array(
    'id' => 7,
    'parent' => 11,
    'template' => 3,
    'pagetitle' => 'openning',
    'longtitle' => '[[++site_name]] is on the way',
    'description' => '',
    'introtext' => '',
    'alias' => 'openning',
    'link_attributes' => '',
    'content' => file_get_contents($src.'openning.tpl'),
    /*'publishedon' => time(),*/
    'isfolder' => false,
    'published' => true,
    'hidemenu' => true,
    'cacheable' => true,
    'searchable' => false,
    'richtext' => false,
    'context_key' => 'web',
    'menuindex' => 1,
    'menutitle' => '',
),'',true,true);

$resources[8] = $modx->newObject('modResource');
$resources[8]->fromArray(array(
    'id' => 8,
    'parent' => 11,
    'template' => 2,
    'pagetitle' => 'rss',
    'longtitle' => '[[++site_name]] RSS Feeds',
    'description' => '',
    'introtext' => '',
    'alias' => 'rss',
    'link_attributes' => '',
    'content' => file_get_contents($src.'rss.tpl'),
    'isfolder' => false,
    'published' => true,
    'hidemenu' => true,
    'searchable' => false,
    'cacheable' => true,
    'richtext' => false,
    'context_key' => 'web',
    'menuindex' => 5,
    'menutitle' => '',
    'content_type' => 6,
    'contentType' => 'text/xml',
),'',true,true);

$resources[9] = $modx->newObject('modResource');
$resources[9]->fromArray(array(
    'id' => 9,
    'parent' => 11,
    'template' => 3,
    'pagetitle' => 'sitemap (html)',
    'longtitle' => '[[++site_name]] sitemap',
    'description' => '',
    'introtext' => '',
    'alias' => 'sitemap',
    'link_attributes' => '',
    'content' => file_get_contents($src.'sitemap.html.tpl'),
    'isfolder' => false,
    'published' => true,
    'hidemenu' => false,
    'searchable' => true,
    'cacheable' => true,
    'richtext' => false,
    'context_key' => 'web',
    'menuindex' => 0,
    'menutitle' => '',
),'',true,true);

$resources[10] = $modx->newObject('modResource');
$resources[10]->fromArray(array(
    'id' => 10,
    'parent' => 11,
    'template' => 0,
    'pagetitle' => 'sitemap',
    'longtitle' => '',
    'description' => '',
    'introtext' => '',
    'alias' => 'sitemap',
    'link_attributes' => '',
    'content' => file_get_contents($src.'sitemap.tpl'),
    'isfolder' => false,
    'published' => true,
    'hidemenu' => true,
    'searchable' => false,
    'cacheable' => true,
    'richtext' => false,
    'context_key' => 'web',
    'menuindex' => 1,
    'menutitle' => '',
    'content_type' => 2,
    'contentType' => 'text/xml',
),'',true,true);


return $resources;