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

// create system settings for modxboilerplate

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
    'value' => '0',
    'xtype' => 'combo-boolean',
    'namespace' => 'modxboilerplate',
    'area' => 'Developement',
),'',true,true);

$settings['mbp.pngfix']= $modx->newObject('modSystemSetting');
$settings['mbp.pngfix']->fromArray(array(
    'key' => 'mbp.pngfix',
    'value' => '0',
    'xtype' => 'combo-boolean',
    'namespace' => 'modxboilerplate',
    'area' => 'Developement',
),'',true,true);

$settings['mbp.profiling']= $modx->newObject('modSystemSetting');
$settings['mbp.profiling']->fromArray(array(
    'key' => 'mbp.profiling',
    'value' => '0',
    'xtype' => 'combo-boolean',
    'namespace' => 'modxboilerplate',
    'area' => 'Developement',
),'',true,true);

$settings['mbp.css']= $modx->newObject('modSystemSetting');
$settings['mbp.css']->fromArray(array(
    'key' => 'mbp.css',
    'value' => '',
    'xtype' => 'textfield',
    'namespace' => 'modxboilerplate',
    'area' => 'Developement',
),'',true,true);

$settings['mbp.css_handled']= $modx->newObject('modSystemSetting');
$settings['mbp.css_handled']->fromArray(array(
    'key' => 'mbp.css_handled',
    'value' => '',
    'xtype' => 'textfield',
    'namespace' => 'modxboilerplate',
    'area' => 'Developement',
),'',true,true);

$settings['mbp.css_print']= $modx->newObject('modSystemSetting');
$settings['mbp.css_print']->fromArray(array(
    'key' => 'mbp.css_print',
    'value' => '',
    'xtype' => 'textfield',
    'namespace' => 'modxboilerplate',
    'area' => 'Developement',
),'',true,true);

$settings['mbp.rss']= $modx->newObject('modSystemSetting');
$settings['mbp.rss']->fromArray(array(
    'key' => 'mbp.rss',
    'value' => '',
    'xtype' => 'textfield',
    'namespace' => 'modxboilerplate',
    'area' => 'Developement',
),'',true,true);

$settings['mbp.piwik']= $modx->newObject('modSystemSetting');
$settings['mbp.piwik']->fromArray(array(
    'key' => 'mbp.piwik',
    'value' => '0',
    'xtype' => 'combo-boolean',
    'namespace' => 'modxboilerplate',
    'area' => 'Analytics',
),'',true,true);

$settings['mbp.piwik_url']= $modx->newObject('modSystemSetting');
$settings['mbp.piwik_url']->fromArray(array(
    'key' => 'mbp.piwik_url',
    'value' => '',
    'xtype' => 'textfield',
    'namespace' => 'modxboilerplate',
    'area' => 'Analytics',
),'',true,true);

$settings['mbp.piwik_id']= $modx->newObject('modSystemSetting');
$settings['mbp.piwik_id']->fromArray(array(
    'key' => 'mbp.piwik_id',
    'value' => '',
    'xtype' => 'textfield',
    'namespace' => 'modxboilerplate',
    'area' => 'Analytics',
),'',true,true);

$settings['mbp.woopra']= $modx->newObject('modSystemSetting');
$settings['mbp.woopra']->fromArray(array(
    'key' => 'mbp.woopra',
    'value' => '0',
    'xtype' => 'combo-boolean',
    'namespace' => 'modxboilerplate',
    'area' => 'Analytics',
),'',true,true);

$settings['mbp.google_analytics']= $modx->newObject('modSystemSetting');
$settings['mbp.google_analytics']->fromArray(array(
    'key' => 'mbp.google_analytics',
    'value' => '0',
    'xtype' => 'combo-boolean',
    'namespace' => 'modxboilerplate',
    'area' => 'Analytics',
),'',true,true);

$settings['mbp.google_analytics_ua']= $modx->newObject('modSystemSetting');
$settings['mbp.google_analytics_ua']->fromArray(array(
    'key' => 'mbp.google_analytics_ua',
    'value' => '',
    'xtype' => 'textfield',
    'namespace' => 'modxboilerplate',
    'area' => 'Analytics',
),'',true,true);


// add system settings modifications here

$setting = $modx->getObject('modSystemSetting',array('key' => 'automatic_alias'));
$setting->set('value', '1');
$setting->save();

$setting = $modx->getObject('modSystemSetting',array('key' => 'friendly_alias_translit'));
$setting->set('value', 'noaccents');
$setting->save();

$setting = $modx->getObject('modSystemSetting',array('key' => 'friendly_urls'));
$setting->set('value', '1');
$setting->save();

$setting = $modx->getObject('modSystemSetting',array('key' => 'use_alias_path'));
$setting->set('value', '1');
$setting->save();

/*
// customize "romain" user to use en

// add basic infos to contexts != web && != mgr if any (base_url, site_start, site_url, 404, 403, mbp., empty cultureKey…)

*/

return $settings;