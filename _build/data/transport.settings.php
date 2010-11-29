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
 * modxboilerplate; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package modxboilerplate
 */
/**
 * Loads system settings into build
 *
 * @package modxboilerplate
 * @subpackage build
 */
$settings = array();

$settings['mbp.tagline']= $modx->newObject('modSystemSetting');
$settings['mbp.tagline']->fromArray(array(
    'key' => 'mbp.tagline',
    'value' => '',
    'xtype' => 'textfield',
    'namespace' => 'modxboilerplate',
    'area' => 'General',
),'',true,true);

$settings['mbp.dev']= $modx->newObject('modSystemSetting');
$settings['mbp.dev']->fromArray(array(
    'key' => 'mbp.dev',
    'value' => '1',
    'xtype' => 'combo-boolean',
    'namespace' => 'modxboilerplate',
    'area' => 'Developement',
),'',true,true);

$settings['mbp.selectivizr']= $modx->newObject('modSystemSetting');
$settings['mbp.selectivizr']->fromArray(array(
    'key' => 'mbp.selectivizr',
    'value' => '1',
    'xtype' => 'combo-boolean',
    'namespace' => 'modxboilerplate',
    'area' => 'Developement',
),'',true,true);


return $settings;