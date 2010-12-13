<?php
/**
 * MODx Boilerplate
 *
 * Copyright 2010 by Romain Tripault // Melting Media <romain@melting-media.com>
 *
 * @package modxboilerplate
 */
/**
 * modxboilerplate build script
 *
 * @package modxboilerplate 
 * @subpackage build
 */

$chunks = array();

// RSS
$chunks[1]= $modx->newObject('modChunk');
$chunks[1]->fromArray(array(
    'id' => 1,
    'name' => 'rss.item',
    'description' => 'Tpl for each RSS post entry.',
    'snippet' => file_get_contents($sources['data'].'chunks/chunk.rss.item.tpl'),
),'',true,true);


return $chunks;