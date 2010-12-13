<?php
/**
 * MODx Boilerplate
 *
 * Copyright 2010 by Romain Tripault // Melting Media <romain@melting-media.com>
 *
 * @package modxboilerplate
 */
/**
 * Creates client usergroup (not used for now)
 *
 * @package modxboilerplate 
 * @subpackage build
 */

$usergroups = array();

$usergroups[1]= $modx->newObject('modUserGroup');
$usergroups[1]->fromArray(array(
    'id' => 1,
    'name' => 'Client',
    'description' => 'Group for clients.',
),'',true,true);

return $usergroups;