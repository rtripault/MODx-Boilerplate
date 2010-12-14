<?php
/**
 * MODx Boilerplate
 *
 * Copyright 2010 by Romain Tripault // Melting Media <romain@melting-media.com>
 *
 * @package modxboilerplate
 */
/**
 * Adds usefull snippets
 *
 * @package modxboilerplate 
 * @subpackage build
 */

$snippets = array();

$snippets[0]= $modx->newObject('modSnippet');
$snippets[0]->fromArray(array(
    'id' => 100,
    'name' => 'Executioner',
    'description' => 'Checks execution time of snippets & chunks',
    'snippet' => getSnippetContent($sources['data'].'snippets/snippet.Executioner.php'),
),'',true,true);
$properties = include $sources['build'].'properties/properties.Executioner.php';
$snippets[0]->setProperties($properties);
unset($properties);

$snippets[1]= $modx->newObject('modSnippet');
$snippets[1]->fromArray(array(
    'id' => 101,
    'name' => 'getChildCount',
    'description' => 'Counts children of a given parent',
    'snippet' => getSnippetContent($sources['data'].'snippets/snippet.getChildCount.php'),
),'',true,true);
$properties = include $sources['build'].'properties/properties.getChildCount.php';
$snippets[1]->setProperties($properties);
unset($properties);

$snippets[2]= $modx->newObject('modSnippet');
$snippets[2]->fromArray(array(
    'id' => 102,
    'name' => 'inc',
    'description' => 'Includes files from filesystem',
    'snippet' => getSnippetContent($sources['data'].'snippets/snippet.inc.php'),
),'',true,true);
/*
$properties = include $sources['build'].'properties/properties.inc.php';
$snippets[2]->setProperties($properties);
unset($properties);
*/

$snippets[3]= $modx->newObject('modSnippet');
$snippets[3]->fromArray(array(
    'id' => 103,
    'name' => 'now',
    'description' => 'Returns actual time in unix timestamp format',
    'snippet' => getSnippetContent($sources['data'].'snippets/snippet.now.php'),
),'',true,true);

$snippets[4]= $modx->newObject('modSnippet');
$snippets[4]->fromArray(array(
    'id' => 104,
    'name' => 'getTime',
    'description' => 'For RSS Feeds',
    'snippet' => getSnippetContent($sources['data'].'snippets/snippet.getTime.php'),
),'',true,true);

$snippets[5]= $modx->newObject('modSnippet');
$snippets[5]->fromArray(array(
    'id' => 105,
    'name' => 'aside',
    'description' => "Generates a list of resources to be used in <aside> (create a TV with input option: EVAL return modx->runSnippet('aside');)",
    'snippet' => getSnippetContent($sources['data'].'snippets/snippet.aside.php'),
),'',true,true);


return $snippets;