<?php
/**
 * MODx Boilerplate
 *
 * Copyright 2010 by Romain Tripault // Melting Media <romain@melting-media.com>
 *
 * @package modxboilerplate
 */
/**
 * Updates system settings & creates some new ones for MODx Boilerplate
 *
 * @package modxboilerplate 
 * @subpackage build
 */

$settings = array();

// update settings
$settings['site_name']= $modx->newObject('modSystemSetting');
$settings['site_name']->fromArray(array (
    'key' => 'site_name',
    'value' => 'MODx Boilerplate', // @TODO managable via setup options
    'xtype' => 'textfield',
    'namespace' => 'core',
    'area' => 'site',
), '', true, true);

$settings['automatic_alias']= $modx->newObject('modSystemSetting');
$settings['automatic_alias']->fromArray(array (
    'key' => 'automatic_alias',
    'value' => '1',
    'xtype' => 'combo-boolean',
    'namespace' => 'core',
    'area' => 'furls',
), '', true, true);

$settings['friendly_alias_translit']= $modx->newObject('modSystemSetting');
$settings['friendly_alias_translit']->fromArray(array (
    'key' => 'friendly_alias_translit',
    'value' => 'noaccents',
    'xtype' => 'textfield',
    'namespace' => 'core',
    'area' => 'furls',
), '', true, true);

$settings['friendly_urls']= $modx->newObject('modSystemSetting');
$settings['friendly_urls']->fromArray(array (
    'key' => 'friendly_urls',
    'value' => '1',
    'xtype' => 'combo-boolean',
    'namespace' => 'core',
    'area' => 'furls',
), '', true, true);

$settings['use_alias_path']= $modx->newObject('modSystemSetting');
$settings['use_alias_path']->fromArray(array (
    'key' => 'use_alias_path',
    'value' => '1',
    'xtype' => 'combo-boolean',
    'namespace' => 'core',
    'area' => 'furls',
), '', true, true);


$settings['default_template']= $modx->newObject('modSystemSetting');
$settings['default_template']->fromArray(array (
  'key' => 'default_template',
  'value' => '3',
  'xtype' => 'modx-combo-template',
  'namespace' => 'core',
  'area' => 'site',
), '', true, true);

$settings['error_page']= $modx->newObject('modSystemSetting');
$settings['error_page']->fromArray(array (
  'key' => 'error_page',
  'value' => '3',
  'xtype' => 'textfield',
  'namespace' => 'core',
  'area' => 'site',
), '', true, true);

$settings['site_unavailable_page']= $modx->newObject('modSystemSetting');
$settings['site_unavailable_page']->fromArray(array (
  'key' => 'site_unavailable_page',
  'value' => '6',
  'xtype' => 'textfield',
  'namespace' => 'core',
  'area' => 'site',
), '', true, true);

$settings['unauthorized_page']= $modx->newObject('modSystemSetting');
$settings['unauthorized_page']->fromArray(array (
  'key' => 'unauthorized_page',
  'value' => '2',
  'xtype' => 'textfield',
  'namespace' => 'core',
  'area' => 'site',
), '', true, true);


// create system settings for modxboilerplate @TODO make things managable via setup options
$settings['mbp.tagline']= $modx->newObject('modSystemSetting');
$settings['mbp.tagline']->fromArray(array(
    'key' => 'mbp.tagline',
    'value' => 'Fastly deploy prototypes with MODx Revolution',
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
    'value' => '5',
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
    'value' => '8',
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

return $settings;