<?php
/**
 * MODx Boilerplate
 *
 * Copyright 2010 by Romain Tripault // Melting Media <romain@melting-media.com>
 *
 * MODx Boilerplate is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * MODx Boilerplate is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * MODx Boilerplate; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package modxboilerplate
 */
/**
 * Add snippets to build
 * 
 * @package modxboilerplate
 * @subpackage build
 */

$snippets = array();

$snippets[0]= $modx->newObject('modSnippet');
$snippets[0]->fromArray(array(
    'id' => 0,
    'name' => 'Executioner',
    'description' => 'Checks execution time of snippets & chunks',
    'snippet' => getSnippetContent($sources['source_core'].'/elements/snippets/snippet.Executioner.php'),
),'',true,true);
$properties = include $sources['build'].'properties/properties.Executioner.php';
$snippets[0]->setProperties($properties);
unset($properties);

$snippets[1]= $modx->newObject('modSnippet');
$snippets[1]->fromArray(array(
    'id' => 1,
    'name' => 'getChildCount',
    'description' => 'Counts children of a given parent',
    'snippet' => getSnippetContent($sources['source_core'].'/elements/snippets/snippet.getChildCount.php'),
),'',true,true);
$properties = include $sources['build'].'properties/properties.getChildCount.php';
$snippets[1]->setProperties($properties);
unset($properties);


$snippets[2]= $modx->newObject('modSnippet');
$snippets[2]->fromArray(array(
    'id' => 2,
    'name' => 'inc',
    'description' => 'Includes files from filesystem',
    'snippet' => getSnippetContent($sources['source_core'].'/elements/snippets/snippet.inc.php'),
),'',true,true);
$properties = include $sources['build'].'properties/properties.inc.php';
$snippets[2]->setProperties($properties);
unset($properties);

$snippets[3]= $modx->newObject('modSnippet');
$snippets[3]->fromArray(array(
    'id' => 3,
    'name' => 'now',
    'description' => 'Returns actual time in unix timestamp format',
    'snippet' => getSnippetContent($sources['source_core'].'/elements/snippets/snippet.now.php'),
),'',true,true);

$snippets[4]= $modx->newObject('modSnippet');
$snippets[4]->fromArray(array(
    'id' => 4,
    'name' => 'getTime',
    'description' => 'For RSS Feeds',
    'snippet' => getSnippetContent($sources['source_core'].'/elements/snippets/snippet.getTime.php'),
),'',true,true);


return $snippets;