<?php


// set site_name
$setting = $modx->getObject('modSystemSetting',array('key' => 'site_name'));
$setting->set('value', 'GAB85');
$setting->save();

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

*/
// create multi contexts if needed for multilingual
/*$context = $modx->newObject('modContext');
$context->set('key','fr');
$context->save();*/

/*
// add basic infos to contexts != web && != mgr if any (base_url, site_start, site_url, 404, 403, mbp., empty cultureKey…)
    $access= $this->xpdo->newObject('modAccessContext');
    $access->fromArray(array(
      'target' => 'mgr',
      'principal_class' => 'modUserGroup',
      'principal' => $adminGroup->get('id'),
      'authority' => 0,
      'policy' => $adminPolicy->get('id'),
    ));
    $access->save();
    unset($access);
*/


// update base template
$template = $modx->getObject('modTemplate',array('id' => '1'));
$template->set('content', '[[!inc?file=`[[++assets_path]]templates/dev.tpl`]]');
$template->save();

// create the basics resources (system)
/*
$resources = array();

$resources['mbp.s']= $modx->newObject('modResource');
$resources['mbp.s']->fromArray(array(
        'pagetitle' => 's',
        'alias' => 's',
        'contentType' => 'text/html',
        'type' => 'document',
        'published' => true,
        'content' => '',
        'template' => '1',
        'searchable' => false,
        'cacheable' => true,
        'createdby' => 1,
        'hidemenu' => true,
        'class_key' => 'modDocument',
        'context_key' => 'web',
        'content_type' => '1',
        'isfolder' => '1',
),'',true,true);


return $resources;
*/