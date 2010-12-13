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
 * @package modxss
 * @subpackage build
 */
$tvs = array();

$tvs[1]= $modx->newObject('modTemplateVar');
$tvs[1]->fromArray(array(
    'id' => 1,
    'name' => 'tags',
    'caption' => 'Tags',
    'description' => 'Comma delimited tags for the current Resource.',
    'type' => 'autotag',
    'display' => 'default',
    'locked' => 0,
    'rank' => 0,
    'default_text' => '',
    'display_params' => '',
),'',true,true);

$tvs[2]= $modx->newObject('modTemplateVar');
$tvs[2]->fromArray(array(
    'id' => 2,
    'name' => 'articleAfter',
    'caption' => 'After &lt;article&gt;',
    'description' => 'Additionnal code after &lt;article&gt;',
    'type' => 'textarea',
    'display' => 'default',
    'locked' => 0,
    'rank' => 0,
    'default_text' => '',
    'display_params' => '',
),'',true,true);

$tvs[3]= $modx->newObject('modTemplateVar');
$tvs[3]->fromArray(array(
    'id' => 3,
    'name' => 'articleBefore',
    'caption' => 'Before &lt;article&gt;',
    'description' => 'Additionnal code before &lt;article&gt;',
    'type' => 'textarea',
    'display' => 'default',
    'locked' => 0,
    'rank' => 0,
    'default_text' => '',
    'display_params' => '',
),'',true,true);

$tvs[4]= $modx->newObject('modTemplateVar');
$tvs[4]->fromArray(array(
    'id' => 4,
    'name' => 'aside-color',
    'caption' => '&lt;aside&gt; bg color',
    'description' => '&lt;aside&gt; background color',
    'type' => 'text',
    'display' => 'default',
    'locked' => 0,
    'rank' => 0,
    'default_text' => '#666',
    'display_params' => '',
),'',true,true);

$tvs[5]= $modx->newObject('modTemplateVar');
$tvs[5]->fromArray(array(
    'id' => 5,
    'name' => 'aside-width',
    'caption' => '&lt;aside&gt; width',
    'description' => '&lt;aside&gt; width',
    'type' => 'text',
    'display' => 'default',
    'locked' => 0,
    'rank' => 0,
    'default_text' => '280px',
    'display_params' => '',
),'',true,true);

$tvs[6]= $modx->newObject('modTemplateVar');
$tvs[6]->fromArray(array(
    'id' => 6,
    'name' => 'bg-color',
    'caption' => '&lt;html&gt; bg color',
    'description' => '&lt;html&gt; background color',
    'type' => 'text',
    'display' => 'default',
    'locked' => 0,
    'rank' => 0,
    'default_text' => '#999',
    'display_params' => '',
),'',true,true);

$tvs[7]= $modx->newObject('modTemplateVar');
$tvs[7]->fromArray(array(
    'id' => 7,
    'name' => 'body-color',
    'caption' => '&lt;body&gt; bg color',
    'description' => '&lt;body&gt; background color',
    'type' => 'text',
    'display' => 'default',
    'locked' => 0,
    'rank' => 0,
    'default_text' => '#fff',
    'display_params' => '',
),'',true,true);

$tvs[8]= $modx->newObject('modTemplateVar');
$tvs[8]->fromArray(array(
    'id' => 8,
    'name' => 'body-width',
    'caption' => '&lt;body&gt; width',
    'description' => '&lt;body&gt; width',
    'type' => 'text',
    'display' => 'default',
    'locked' => 0,
    'rank' => 0,
    'default_text' => '960px',
    'display_params' => '',
),'',true,true);

$tvs[9]= $modx->newObject('modTemplateVar');
$tvs[9]->fromArray(array(
    'id' => 9,
    'name' => 'contentAfter',
    'caption' => 'After [[*content]]',
    'description' => 'Additionnal code after [[*content]]',
    'type' => 'textarea',
    'display' => 'default',
    'locked' => 0,
    'rank' => 0,
    'default_text' => '',
    'display_params' => '',
),'',true,true);

$tvs[10]= $modx->newObject('modTemplateVar');
$tvs[10]->fromArray(array(
    'id' => 10,
    'name' => 'contentBefore',
    'caption' => 'Before [[*content]]',
    'description' => 'Additionnal code before [[*content]]',
    'type' => 'textarea',
    'display' => 'default',
    'locked' => 0,
    'rank' => 0,
    'default_text' => '',
    'display_params' => '',
),'',true,true);

$tvs[11]= $modx->newObject('modTemplateVar');
$tvs[11]->fromArray(array(
    'id' => 11,
    'name' => 'customCSS',
    'caption' => 'Custom CSS',
    'description' => 'Add custom CSS for this resource',
    'type' => 'text',
    'display' => 'default',
    'locked' => 0,
    'rank' => 0,
    'default_text' => '',
    'display_params' => '',
),'',true,true);

$tvs[12]= $modx->newObject('modTemplateVar');
$tvs[12]->fromArray(array(
    'id' => 12,
    'name' => 'customRSS',
    'caption' => 'Custom RSS',
    'description' => 'Add custom RSS feed(s) for this resource',
    'type' => 'text',
    'display' => 'default',
    'locked' => 0,
    'rank' => 0,
    'default_text' => '',
    'display_params' => '',
),'',true,true);

$tvs[13]= $modx->newObject('modTemplateVar');
$tvs[13]->fromArray(array(
    'id' => 13,
    'name' => 'main-width',
    'caption' => '#main width',
    'description' => '#main width',
    'type' => 'text',
    'display' => 'default',
    'locked' => 0,
    'rank' => 0,
    'default_text' => '620px',
    'display_params' => '',
),'',true,true);

$tvs[14]= $modx->newObject('modTemplateVar');
$tvs[14]->fromArray(array(
    'id' => 14,
    'name' => 'selection',
    'caption' => '::selection bg color',
    'description' => '::selection background color',
    'type' => 'text',
    'display' => 'default',
    'locked' => 0,
    'rank' => 0,
    'default_text' => '#ff5e99',
    'display_params' => '',
),'',true,true);

return $tvs;