<?php
/**
 * MODx Boilerplate
 *
 * Copyright 2010 by Romain Tripault // Melting Media <romain@melting-media.com>
 *
 * @package modxboilerplate
 */
/**
 * Removes .html suffix for html resources
 *
 * @package modxboilerplate 
 * @subpackage build
 */

$contenttypes = array();

$contenttypes['1']= $modx->newObject('modContentType');
$contenttypes['1']->fromArray(array (
  'id' => 1,
  'name' => 'HTML',
  'description' => 'HTML content',
  'mime_type' => 'text/html',
  'file_extensions' => '',
  'headers' => 'NULL',
  'binary' => 0,
), '', true, true);

return $contenttypes;