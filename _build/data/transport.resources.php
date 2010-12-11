<?php
/**
 * MODx Sample Site
 *
 * Copyright 2010 by Shaun McCormick <shaun@collabpad.com>, excepting
 * subpackages installed by the component.
 *
 * This file is part of MODx Sample Site, a packaged sample site for MODx
 * Revolution.
 *
 * MODx Sample Site is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * MODx Sample Site is distributed in the hope that it will be useful, but
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or
 * FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along with
 * MODx Sample Site; if not, write to the Free Software Foundation, Inc., 59
 * Temple Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package modxss
 */
/**
 * Transport Resource
 * @package modxss
 * @subpackage build
 */
$resources = array();
$pages = $sources['data'].'resources/';

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
    'content' => file_get_contents($pages.'s/empty.tpl'),
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
    'content' => file_get_contents($pages.'s/403.tpl'),
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
    'content' => file_get_contents($pages.'s/404.tpl'),
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
    'content' => file_get_contents($pages.'s/legal.tpl'),
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
    'template' => 0,
    'pagetitle' => 'master.css',
    'longtitle' => '',
    'description' => '',
    'introtext' => '',
    'alias' => 'master',
    'link_attributes' => '',
    'content' => file_get_contents($pages.'s/master.css.tpl'),
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
    'content' => file_get_contents($pages.'s/offline.tpl'),
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
    'content' => file_get_contents($pages.'s/openning.tpl'),
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
    'content' => file_get_contents($pages.'s/rss.tpl'),
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
    'content' => file_get_contents($pages.'s/sitemap.html.tpl'),
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
    'content' => file_get_contents($pages.'s/sitemap.tpl'),
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